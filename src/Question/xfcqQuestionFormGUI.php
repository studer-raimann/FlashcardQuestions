<?php

namespace srag\Plugins\FlashcardQuestions\Question;

use srag\DIC\DICTrait;
use ilFlashcardQuestionsPlugin;
use xfcqQuestionGUI;
use \ilPropertyFormGUI;
use \ilTextInputGUI;
use \ilCheckboxInputGUI;
use \ilTaxSelectInputGUI;
use \ilObject2;
/**
 * Class xfcqQuestionFormGUI
 * @package srag\Plugins\FlashcardQuestions\Question
 *
 * @author Theodor Truffer <tt@studer-raimann.ch>
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
     * xfcqQuestionFormGUI constructor.
     * @param xfcqQuestionGUI $parent_gui
     * @param xfcqQuestion $question
     * @throws \srag\DIC\Exception\DICException
     */
    public function __construct(xfcqQuestionGUI $parent_gui, xfcqQuestion $question) {
        $this->question = $question;
        $this->parent_gui = $parent_gui;
        $this->is_new = !(bool) ($question->getId());
//        $this->setTitle(self::plugin()->translate('question_settings_form_title', self::LANG_MODULE));
        $this->setTitle('&nbsp;');
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
        $input = new ilTextInputGUI(self::plugin()->translate(self::F_TITLE, self::LANG_MODULE), self::F_TITLE);
        $input->setRequired(true);
        $this->addItem($input);

        $input = new ilTaxSelectInputGUI(array_shift(\ilObjTaxonomy::getUsageOfObject($this->parent_gui->getObjId())), self::F_TAXONOMY, true);
        $this->addItem($input);

        $input = new ilCheckboxInputGUI(self::plugin()->translate(self::F_ACTIVE, self::LANG_MODULE), self::F_ACTIVE);
        $this->addItem($input);

        $this->addCommandButton(xfcqQuestionGUI::CMD_SAVE_SETTINGS, self::plugin()->translate(xfcqQuestionGUI::CMD_SAVE_SETTINGS, 'button'));
        $this->addCommandButton(xfcqQuestionGUI::CMD_SAVE_SETTINGS_AND_CONTINUE, self::plugin()->translate(xfcqQuestionGUI::CMD_SAVE_SETTINGS_AND_CONTINUE, 'button'));
    }

    /**
     *
     */
    protected function fillForm() {
        $this->setValuesByArray(array(
           self::F_TITLE => $this->question->getTitle(),
           self::F_TAXONOMY => $this->question->getTaxNodes(),
           self::F_ACTIVE => $this->question->isActive()
        ));
    }

    /**
     * @return bool
     */
    public function saveForm(): bool {
        if (!$this->checkInput()) {
            return false;
        }

        $this->question->setTitle($this->getInput(self::F_TITLE));
        $this->question->setTaxNodes($this->getInput(self::F_TAXONOMY));
        $this->question->setActive($this->getInput(self::F_ACTIVE));
        $this->question->setObjId($this->parent_gui->getObjId());

        $this->question->store();
        self::dic()->ctrl()->setParameter($this->parent_gui, 'qst_id', $this->question->getId());
        return true;
    }

}