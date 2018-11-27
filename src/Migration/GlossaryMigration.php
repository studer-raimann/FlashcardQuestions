<?php

namespace srag\Plugins\FlashcardQuestions\GlossaryMigration;

use ilFlashcardQuestionsPlugin;
use ilGlossaryDefinition;
use ilObjFlashcardQuestions;
use ilObjGlossary;
use ilObjTaxonomy;
use ilTaxNodeAssignment;
use srag\DIC\DICTrait;
use srag\Plugins\FlashcardQuestions\Question\xfcqQuestion;

/**
 * Class GlossaryMigration
 *
 * @author Theodor Truffer <tt@studer-raimann.ch>
 */
class GlossaryMigration {

	use DICTrait;
	const PLUGIN_CLASS_NAME = ilFlashcardQuestionsPlugin::class;


	/**
	 * GlossaryMigration constructor
	 */
	public function __construct() {
	}


	/**
	 *
	 */
	public function run() {
		$mapping_ref_ids = array();
		$mapping_term_ids = array();
		$glossaries = $this->fetchGlossaries();
		foreach ($glossaries as $glossary) {
			$parent_id = self::dic()->tree()->getParentId($glossary->getRefId());
			$ilObjFlashcardQuestions = new ilObjFlashcardQuestions();
			$ilObjFlashcardQuestions->setTitle($glossary->getTitle());
			$ilObjFlashcardQuestions->setDescription($glossary->getDescription());
			$ilObjFlashcardQuestions->create();
			$ilObjFlashcardQuestions->createReference();
			$ilObjFlashcardQuestions->putInTree($parent_id);
			$ilObjFlashcardQuestions->setPermissions($parent_id);
			$ilObjFlashcardQuestions->setOnline($glossary->getOnline());
			$ilObjFlashcardQuestions->update();

			$old_taxonomy = new ilObjTaxonomy($glossary->getTaxonomyId());
			$new_taxonomy = new ilObjTaxonomy(array_shift($ilObjFlashcardQuestions->getTaxonomyIds()));
			$old_taxonomy->cloneNodes($new_taxonomy, $old_taxonomy->getTree()->getRootId(), $new_taxonomy->getTree()->getRootId());
			$new_taxonomy->setSortingMode($old_taxonomy->getSortingMode());
			$new_taxonomy->setItemSorting($old_taxonomy->getItemSorting());
			$new_taxonomy->update();

			$node_mapping = $old_taxonomy->getNodeMapping();

			$terms = $glossary->getTermList();
			foreach ($terms as $term) {
				$definitions = ilGlossaryDefinition::getDefinitionList($term['id']);
				if (count($definitions) < 2) {
					continue;
				}
				/** @var ilGlossaryDefinition $question_definition */
				/** @var ilGlossaryDefinition $answer_definition */
				$question_definition = $definitions[0];
				$answer_definition = $definitions[1];

				$this->migratePageObject($question_definition['id'], $ilObjFlashcardQuestions->getId());
				$this->migratePageObject($answer_definition['id'], $ilObjFlashcardQuestions->getId());

				$xfcqQuestion = new xfcqQuestion();
				$xfcqQuestion->setTitle($term['term']);
				$xfcqQuestion->setActive(true);

				foreach ($this->getTaxNodeIds($glossary, $term) as $old_node_id) {
					$new_node_id = $node_mapping[$old_node_id];
					$new_tax_nodes[$new_taxonomy->getId()][] = $new_node_id;
				}

				$xfcqQuestion->setTaxNodesForTaxId($this->getTaxNodeIds($glossary, $term), array_shift($ilObjFlashcardQuestions->getTaxonomyIds()));
				$xfcqQuestion->setObjId($ilObjFlashcardQuestions->getId());
				$xfcqQuestion->setPageIdQuestion($question_definition['id']);
				$xfcqQuestion->setPageIdAnswer($answer_definition['id']);
				$xfcqQuestion->setOriginGloId($glossary->getId());
				$xfcqQuestion->setOriginTermId($term['id']);
				$xfcqQuestion->create(true);

				$this->migrateFlashCards($term['id'], $xfcqQuestion->getId());
				$mapping_term_ids[$term['id']] = $xfcqQuestion->getId();
			}

			$this->migrateFlashCardObjects($glossary->getRefId(), $ilObjFlashcardQuestions->getRefId());

			$mapping_ref_ids[$glossary->getRefId()] = $ilObjFlashcardQuestions->getRefId();

			// move glossary to trash
			self::dic()->tree()->moveToTrash($glossary->getRefId());
		}

		var_dump($mapping_ref_ids);
		exit;
	}


	/**
	 * @param int $glo_ref_id
	 * @param int $xfcq_ref_id
	 *
	 * @return array
	 */
	protected function migrateFlashCardObjects(int $glo_ref_id, int $xfcq_ref_id) {
		$migrated_obj_ids = array();
		$query = self::dic()->database()
			->query('SELECT obj_id, glossary_ref_id, card_pool_type, xfcq_ref_id FROM rep_robj_xflc_data where glossary_ref_id = ' . $glo_ref_id);
		while ($set = self::dic()->database()->fetchAssoc($query)) {
			if (($set['card_pool_type'] == 0) && ($set['xfcq_ref_id'] == 0)) {
				self::dic()->database()->query('UPDATE rep_robj_xflc_data 
                            SET card_pool_type = 1, xfcq_ref_id = ' . $xfcq_ref_id . ' 
                            WHERE obj_id = ' . $set['obj_id']);
				$migrated_obj_ids[] = $set['obj_id'];
			}
		}

		return $migrated_obj_ids;
	}


	/**
	 * @param int $term_id
	 * @param int $xfcq_qst_id
	 */
	protected function migrateFlashCards(int $term_id, int $xfcq_qst_id) {
		self::dic()->database()->query('UPDATE rep_robj_xflc_cards 
                        SET term_id = ' . $term_id . ' 
                        WHERE term_id = ' . $xfcq_qst_id);
	}


	/**
	 * @return ilObjGlossary[]
	 */
	protected function fetchGlossaries(): array {
		$query = self::dic()->database()->query('SELECT ref_id from object_data d 
                    inner join object_reference r on d.obj_id = r.obj_id 
                    where type = "glo" 
                    and d.title LIKE "%Offizielle Prüfungsfragen%"
                    and deleted is null');
		$glossaries = [];
		while ($set = self::dic()->database()->fetchAssoc($query)) {
			$glossaries[] = new ilObjGlossary($set['ref_id']);
		}

		return $glossaries;
	}


	/**
	 * @param int $page_id
	 * @param int $new_parent_id
	 */
	protected function migratePageObject(int $page_id, int $new_parent_id) {
		self::dic()->database()
			->query('INSERT INTO page_object (page_id, parent_id, content, parent_type, last_change_user, view_cnt, last_change, created, create_user, render_md5, rendered_content, rendered_time, activation_start, activation_end, active, is_empty, inactive_elements, int_links, show_activation_info, lang, edit_lock_user, edit_lock_ts)'
				. ' select page_id, ' . $new_parent_id
				. ', content, "xfcq", last_change_user, view_cnt, last_change, created, create_user, render_md5, rendered_content, rendered_time, activation_start, activation_end, active, is_empty, inactive_elements, int_links, show_activation_info, lang, edit_lock_user, edit_lock_ts'
				. ' from page_object' . ' where parent_type = "gdf" and page_id = ' . $page_id);
	}


	/**
	 * @param ilObjGlossary $glossary
	 * @param array         $term
	 *
	 * @return array
	 * @throws \ilTaxonomyException
	 */
	protected function getTaxNodeIds(ilObjGlossary $glossary, array $term): array {
		$ta = new ilTaxNodeAssignment("glo", $glossary->getId(), "term", $glossary->getTaxonomyId());
		$assgnmts = $ta->getAssignmentsOfItem($term['id']);
		$node_ids = array();
		foreach ($assgnmts as $a) {
			$node_ids[] = $a["node_id"];
		}

		return $node_ids;
	}
}