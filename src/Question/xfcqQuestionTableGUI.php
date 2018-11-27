<?php

namespace srag\Plugins\FlashcardQuestions\Question;

use ilAdvancedSelectionListGUI;
use ilCheckboxInputGUI;
use ilDateDurationInputGUI;
use ilDurationInputGUI;
use ilFlashcardQuestionsPlugin;
use ilFormPropertyGUI;
use ilObjTaxonomy;
use ilSelectInputGUI;
use ilTable2GUI;
use ilTaxonomyException;
use ilTaxSelectInputGUI;
use ilTextInputGUI;
use ilUtil;
use srag\DIC\DICTrait;
use srag\DIC\Exception\DICException;
use xfcqContentGUI;
use xfcqPageObject;
use xfcqQuestionGUI;

/**
 * Class xfcqQuestionTableGUI
 *
 * @package srag\Plugins\FlashcardQuestions\Question
 *
 * @author  Theodor Truffer <tt@studer-raimann.ch>
 */
class xfcqQuestionTableGUI extends ilTable2GUI {

	use DICTrait;
	const PLUGIN_CLASS_NAME = ilFlashcardQuestionsPlugin::class;
	const LANG_MODULE = 'table';
	const PREFIX = 'xfcq_qst_';
	const FILTER_ACTIVE_TRUE = 1;
	const FILTER_ACTIVE_FALSE = 2;
	/**
	 * @var array
	 */
	protected $filter;
	/**
	 * @var xfcqContentGUI
	 */
	protected $parent_gui;


	/**
	 * xfcqQuestionTableGUI constructor
	 *
	 * @param xfcqContentGUI $parent_gui
	 *
	 * @throws ilTaxonomyException
	 * @throws DICException
	 */
	public function __construct(xfcqContentGUI $parent_gui) {
		$this->parent_gui = $parent_gui;
		$this->setPrefix(self::PREFIX);
		$this->setId(self::PREFIX . '_' . $_GET['ref_id']);
		$this->setTitle(self::plugin()->translate('question_table_title', 'table'));
		parent::__construct($parent_gui);
		$this->setFilterCommand(xfcqContentGUI::CMD_APPLY_FILTER);
		$this->setFormAction(self::dic()->ctrl()->getFormAction($parent_gui));
		$this->setRowTemplate(self::plugin()->directory() . '/templates/default/tpl.generic_table_row.html');
		$this->initColumns();
		$this->initFilter();
		$this->addMultiCommand(xfcqContentGUI::CMD_DELETE, self::dic()->language()->txt('delete'));
		$this->addMultiCommand(xfcqContentGUI::CMD_ACTIVATE, self::dic()->language()->txt('activate'));
		$this->addMultiCommand(xfcqContentGUI::CMD_DEACTIVATE, self::dic()->language()->txt('deactivate'));
		$this->setSelectAllCheckbox('id');

		$raw_data = xfcqQuestion::where([ 'obj_id' => $parent_gui->getObjId() ])->getArray();
		$data = $this->passThroughFilter($raw_data);
		$this->setData($data);
	}


	/**
	 * @param array $a_set
	 *
	 * @throws DICException
	 */
	protected function fillRow($a_set) {

		self::dic()->ctrl()->setParameterByClass(xfcqQuestionGUI::class, 'qst_id', $a_set['id']);
		self::dic()->ctrl()->setParameterByClass(xfcqContentGUI::class, 'qst_id', $a_set['id']);

		$this->tpl->setVariable('ROW_ID', $a_set['id']);

		if ($this->isColumnSelected('active')) {
			$this->tpl->setCurrentBlock('row');
			$this->tpl->setVariable('VALUE', $this->getActiveIcon($a_set['active']));
			$this->tpl->parseCurrentBlock();
		}

		if ($this->isColumnSelected('title')) {
			$this->tpl->setCurrentBlock('row');
			$this->tpl->setVariable('VALUE', $this->formatTitle($a_set));
			$this->tpl->parseCurrentBlock();
		}

		if ($this->isColumnSelected('question')) {
			$this->tpl->setCurrentBlock('row');
			$this->tpl->setVariable('VALUE', $this->getPagePreview($a_set['page_id_qst']));
			$this->tpl->parseCurrentBlock();
		}

		if ($this->isColumnSelected('answer')) {
			$this->tpl->setCurrentBlock('row');
			$this->tpl->setVariable('VALUE', $this->getPagePreview($a_set['page_id_ans']));
			$this->tpl->parseCurrentBlock();
		}

		foreach ($this->parent_gui->getObject()->getTaxonomyIds() as $tax_id) {
			if ($this->isColumnSelected('taxonomy_' . $tax_id)) {
				$this->tpl->setCurrentBlock('row');
				if (isset($a_set['tax_nodes'][$tax_id])) {
					$this->tpl->setVariable('VALUE', implode(', ', array_map('ilTaxonomyNode::_lookupTitle', $a_set['tax_nodes'][$tax_id])));
				} else {
					$this->tpl->setVariable('VALUE', '&nbsp');
				}
				$this->tpl->parseCurrentBlock();
			}
		}

		$this->tpl->setCurrentBlock('row');
		$this->tpl->setVariable('VALUE', $this->getActionMenu($a_set));
		$this->tpl->parseCurrentBlock();
	}


	/**
	 * @throws ilTaxonomyException
	 */
	function initFilter() {
		$filter_item = new ilTextInputGUI(self::dic()->language()->txt('title'), 'title');
		$this->addAndReadFilterItem($filter_item);

		$filter_item = new ilSelectInputGUI(self::dic()->language()->txt('active'), 'active');
		$filter_item->setOptions([
			'' => self::dic()->language()->txt('please_select'),
			self::FILTER_ACTIVE_TRUE => self::dic()->language()->txt('yes'),
			self::FILTER_ACTIVE_FALSE => self::dic()->language()->txt('no'),
		]);
		$this->addAndReadFilterItem($filter_item);

		foreach ($this->parent_gui->getObject()->getTaxonomyIds() as $tax_id) {
			$filter_item = new ilTaxSelectInputGUI($tax_id, "taxonomy_$tax_id", true);
			$this->addAndReadFilterItem($filter_item);
		}
	}


	protected function passThroughFilter(array $data): array {
		$filtered_array = [];
		foreach ($data as $set) {
			// title
			$filter_title = trim($this->filter['title']);
			if ($filter_title && strpos($set['title'], $filter_title) === false) {
				continue;
			}
			//taxonomies
			foreach ($this->parent_gui->getObject()->getTaxonomyIds() as $tax_id) {
				if (count(array_filter($this->filter['taxonomy_' . $tax_id]))
					&& empty(array_intersect($set['tax_nodes'][$tax_id], $this->filter['taxonomy_' . $tax_id]))) {
					continue 2;
				}
			}
			// active
			if ($this->filter['active'] == self::FILTER_ACTIVE_TRUE && !$set['active']) {
				continue;
			}
			// inactive
			if ($this->filter['active'] == self::FILTER_ACTIVE_FALSE && $set['active']) {
				continue;
			}
			$filtered_array[] = $set;
		}

		return $filtered_array;
	}


	/**
	 * @param $item
	 */
	protected function addAndReadFilterItem(ilFormPropertyGUI $item) {
		$this->addFilterItem($item);
		$item->readFromSession();

		switch (true) {
			case ($item instanceof ilCheckboxInputGUI):
				$this->filter[$item->getPostVar()] = $item->getChecked();
				break;
			case ($item instanceof ilDateDurationInputGUI):
				$this->filter[$item->getPostVar()] = array(
					'start' => $item->getStart(),
					'end' => $item->getEnd(),
				);
				break;
			case ($item instanceof ilDurationInputGUI):
				$this->filter[$item->getPostVar()] = $item->getSeconds();
				break;
			default:
				$this->filter[$item->getPostVar()] = $item->getValue();
				break;
		}
	}


	/**
	 *
	 */
	protected function initColumns() {
		// checkbox column
		$this->addColumn('', '', 10, true);

		foreach ($this->getSelectableColumns() as $title => $props) {
			if ($this->isColumnSelected($title)) {
				$this->addColumn($props['txt'], $props['sort_field'], $props['width']);
			}
		}

		// action column
		$this->addColumn('', '', 30, true);
	}


	/**
	 * @param $column
	 *
	 * @return bool
	 * @throws DICException
	 */
	public function isColumnSelected($column): bool {
		if (!array_key_exists($column, $this->getSelectableColumns())) {
			return true;
		}

		return in_array($column, $this->getSelectedColumns());
	}


	/**
	 * @return array
	 * @throws DICException
	 */
	public function getSelectableColumns(): array {
		$columns = [
			'active' => [
				'txt' => self::plugin()->translate('row_active', self::LANG_MODULE),
				'sort_field' => false,
				'width' => '',
				'default' => true
			],
			'title' => [
				'txt' => self::plugin()->translate('row_title', self::LANG_MODULE),
				'sort_field' => 'title',
				'width' => '',
				'default' => true
			],
			'question' => [
				'txt' => self::plugin()->translate('row_question', self::LANG_MODULE),
				'sort_field' => false,
				'width' => '',
				'default' => true
			],
			'answer' => [
				'txt' => self::plugin()->translate('row_answer', self::LANG_MODULE),
				'sort_field' => false,
				'width' => '',
				'default' => true
			],
		];
		foreach ($this->parent_gui->getObject()->getTaxonomyIds() as $tax_id) {
			$ilObjTaxonomy = new ilObjTaxonomy($tax_id);
			$columns['taxonomy_' . $tax_id] = [ 'txt' => $ilObjTaxonomy->getTitle(), 'sort_field' => false, 'width' => '', 'default' => true ];
		}

		return $columns;
	}


	/**
	 * @param int $page_id
	 *
	 * @return string
	 */
	protected function getPagePreview(int $page_id): String {
		$page = new xfcqPageObject($page_id);
		$page->buildDom();
		$rendered_content = $page->getRenderedContent();
		$short_str = $page->getFirstParagraphText();
		$short_str = strip_tags($short_str, "<br>");

		return $short_str;
	}


	/**
	 * @param $active
	 *
	 * @return string
	 */
	protected function getActiveIcon(bool $active): String {
		if ($active) {
			$icon_path = ilUtil::getImagePath('icon_ok.svg');
		} else {
			$icon_path = ilUtil::getImagePath('icon_not_ok.svg');
		}

		return '<img src="' . $icon_path . '">';
	}


	protected function formatTitle(array $a_set): String {
		$link = self::dic()->ctrl()->getLinkTargetByClass(xfcqQuestionGUI::class, xfcqQuestionGUI::CMD_EDIT_SETTINGS);

		return '<a href="' . $link . '">' . $a_set['title'] . '</a>';
	}


	/**
	 * @param array $a_set
	 *
	 * @return String
	 * @throws DICException
	 */
	protected function getActionMenu(array $a_set): String {
		$actions = new ilAdvancedSelectionListGUI();

		$actions->setListTitle(self::dic()->language()->txt('actions'));
		$actions->addItem(self::dic()->language()->txt('edit'), xfcqQuestionGUI::CMD_EDIT_SETTINGS, self::dic()->ctrl()
			->getLinkTargetByClass(xfcqQuestionGUI::class, xfcqQuestionGUI::CMD_EDIT_SETTINGS));
		$actions->addItem(self::dic()->language()->txt('delete'), 'delete', self::dic()->ctrl()
			->getLinkTargetByClass(xfcqContentGUI::class, xfcqContentGUI::CMD_DELETE));
		if ($a_set['active']) {
			$actions->addItem(self::dic()->language()->txt('deactivate'), 'deactivate', self::dic()->ctrl()
				->getLinkTargetByClass(xfcqContentGUI::class, xfcqContentGUI::CMD_DEACTIVATE));
		} else {
			$actions->addItem(self::dic()->language()->txt('activate'), 'activate', self::dic()->ctrl()
				->getLinkTargetByClass(xfcqContentGUI::class, xfcqContentGUI::CMD_ACTIVATE));
		}

		return $actions->getHTML();
	}
}
