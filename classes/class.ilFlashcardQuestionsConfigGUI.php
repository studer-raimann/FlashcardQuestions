<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

require_once __DIR__ . "/../vendor/autoload.php";

use srag\Plugins\FlashcardQuestions\Config\ConfigFormGUI;
use srag\ActiveRecordConfig\FlashcardQuestions\ActiveRecordConfigGUI;
use srag\Plugins\FlashcardQuestions\GlossaryMigration\GlossaryMigrationWKV;
use srag\Plugins\FlashcardQuestions\GlossaryMigration\MigrationFormGUI;

/**
 * Class ilFlashcardQuestionsConfigGUI
 *
 * Generated by srag\PluginGenerator v0.7.2
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilFlashcardQuestionsConfigGUI extends ActiveRecordConfigGUI {

	const PLUGIN_CLASS_NAME = ilFlashcardQuestionsPlugin::class;
	const CONFIG_FORM_GUI_CLASS_NAME = ConfigFormGUI::class;

	const TAB_MIGRATION = 'migration';

    const CMD_CONFIRM_MIGRATE = 'confirmMigrate';
    const CMD_MIGRATE = 'migrate';

    protected static $custom_commands = [self::CMD_CONFIRM_MIGRATE, self::CMD_MIGRATE];

    /**
     * @var array
     */
	protected static $tabs = [
        self::TAB_CONFIGURATION => ConfigFormGUI::class,
        self::TAB_MIGRATION => MigrationFormGUI::class,
    ];

    /**
     * @throws \srag\DIC\FlashcardQuestions\Exception\DICException
     * @throws ilTemplateException
     */
    protected function confirmMigrate() {
	    self::dic()->tabs()->activateTab(self::TAB_MIGRATION);
        $confirmationGUI = new ilConfirmationGUI();
        $confirmationGUI->setFormAction(self::dic()->ctrl()->getFormAction($this));
        $confirmationGUI->setCancel(self::dic()->language()->txt('cancel'), $this->getCmdForTab(self::TAB_MIGRATION));
        $confirmationGUI->setConfirm(self::plugin()->translate(self::CMD_MIGRATE), self::CMD_MIGRATE);
        $confirmationGUI->addItem(MigrationFormGUI::F_TITLE_PATTERN, $_POST[MigrationFormGUI::F_TITLE_PATTERN], self::plugin()->translate(MigrationFormGUI::F_TITLE_PATTERN, self::LANG_MODULE_CONFIG) . ': ' . $_POST[MigrationFormGUI::F_TITLE_PATTERN]);
        self::output()->output($confirmationGUI->getHTML());
    }

    /**
     *
     */
    protected function migrate() {
        $pattern = $_POST[MigrationFormGUI::F_TITLE_PATTERN];
        $migration = new GlossaryMigrationWKV();
        try {
            $mapping = $migration->run($pattern);
        } catch (Exception $e) {
            $message = self::plugin()->translate('msg_migration_failed') . $e->getMessage();
            ilUtil::sendFailure($message, true);
            $mail = new ilMail(ANONYMOUS_USER_ID);
            $mail->sendMail(
                self::dic()->user()->getLogin(),
                '',
                '',
                'Migration Summary',
                str_replace('<br>', "\n", $message),
                [],
                ['system']
            );
            self::redirectToTab(self::TAB_MIGRATION);
        }

        $message = self::plugin()->translate('msg_migration_succeeded');
        foreach ($mapping as $glo_ref_id => $xfcq_ref_id) {
            $loc_gui = new ilLocatorGUI();
            $loc_gui->addContextItems($xfcq_ref_id);
            $message .= $loc_gui->getHTML() . '<br>';
        }

        ilUtil::sendSuccess($message, true);
        $mail = new ilMail(ANONYMOUS_USER_ID);
        $mail->sendMail(
            self::dic()->user()->getLogin(),
            '',
            '',
            'Migration Summary',
            str_replace('<br>', "\n", $message),
            [],
            ['system']
        );

        self::redirectToTab(self::TAB_MIGRATION);
    }
}
