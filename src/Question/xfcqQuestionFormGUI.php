<?php

namespace srag\Plugins\FlashcardQuestions\Question;

use ilCheckboxInputGUI;
use ilFlashcardQuestionsPlugin;
use ilPropertyFormGUI;
use ilTaxSelectInputGUI;
use ilTextInputGUI;
use srag\DIC\FlashcardQuestions\DICTrait;
use srag\DIC\FlashcardQuestions\Exception\DICException;
use xfcqQuestionGUI;

/**
 * Class xfcqQuestionFormGUI
 *
 * @package srag\Plugins\FlashcardQuestions\Question
 *
 * @author  Theodor Truffer <tt@studer-raimann.ch>
 */
class xfcqQuestionFormGUI extends ilPropertyFormGUI {

	use DICTrait;
	const PLUGIN_CLASS_NAME = ilFlashcardQuestionsPlugin::class;
	const LANG_MODULE = 'form';
	const F_TITLE = 'f_title';
	const F_TAXONOMY = 'f_taxonomy';
	const F_ACTIVE = 'f_active';
	/**
	 * @var xfcqQuestionGUI;
	 */
	protected $parent_gui;
	/**
	 * @var xfcqQuestion;
	 */
	protected $question;
	/**
	 * @var bool
	 */
	protected $is_new = false;


	/**
	 * xfcqQuestionFormGUI constructor
	 *
	 * @param xfcqQuestionGUI $parent_gui
	 * @param xfcqQuestion    $question
	 *
	 * @throws DICException
	 */
	public function __construct(xfcqQuestionGUI $parent_gui, xfcqQuestion $question) {
		$this->question = $question;
		$this->parent_gui = $parent_gui;
		$this->is_new = !(bool)($question->getId());
		$this->setTitle(self::plugin()->translate('question_settings_form_title', self::LANG_MODULE));
		//        $this->setTitle('&nbsp;');
		parent::__construct();
		$this->setFormAction(self::dic()->ctrl()->getFormAction($parent_gui));
		$this->initForm();

		if (!$this->is_new) {
			$this->fillForm();
		}
	}


	/**
	 *
	 */
	protected function initForm() {
		foreach ($this->parent_gui->getObject()->getTaxonomyIds() as $tax_id) {
			$input = new ilTaxSelectInputGUI($tax_id, self::F_TAXONOMY . "_$tax_id", true);
			$this->addItem($input);
		}

		$input = new ilCheckboxInputGUI(self::plugin()->translate(self::F_ACTIVE, self::LANG_MODULE), self::F_ACTIVE);
		$input->setChecked(true);
		$this->addItem($input);

		$this->addCommandButton(xfcqQuestionGUI::CMD_SAVE_SETTINGS, self::plugin()->translate(xfcqQuestionGUI::CMD_SAVE_SETTINGS, 'button'));
	}


	/**
	 *
	 */
	protected function fillForm() {
		$array = array(
			self::F_ACTIVE => $this->question->isActive()
		);
		foreach ($this->parent_gui->getObject()->getTaxonomyIds() as $tax_id) {
			$array[self::F_TAXONOMY . "_$tax_id"] = $this->question->getTaxNodesForTaxId($tax_id);
		}
		$this->setValuesByArray($array);
	}


	/**
	 * @return bool
	 */
	public function saveForm() {
		if (!$this->checkInput()) {
			return false;
		}

		$this->question->setActive($this->getInput(self::F_ACTIVE));
		foreach ($this->parent_gui->getObject()->getTaxonomyIds() as $tax_id) {

			if(is_array($this->getInput(self::F_TAXONOMY . "_".$tax_id."_sel"))) {
				$this->question->setTaxNodesForTaxId($this->getInput(self::F_TAXONOMY . "_".$tax_id."_sel"), $tax_id);
			}
			else {
				$this->question->setTaxNodesForTaxId(array(), $tax_id);
			}


		}
		$this->question->store();
		self::dic()->ctrl()->setParameter($this->parent_gui, 'qst_id', $this->question->getId());

		return true;
	}
}
