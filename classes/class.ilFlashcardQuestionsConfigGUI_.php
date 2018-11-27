<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

require_once __DIR__ . "/../vendor/autoload.php";

use srag\ActiveRecordConfig\ActiveRecordConfigGUI;
use srag\Plugins\FlashcardQuestions\Config\ConfigFormGUI;

/**
 * Class ilFlashcardQuestionsConfigGUI
 *
 * Generated by srag\PluginGenerator v0.7.2
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilFlashcardQuestionsConfigGUI extends ActiveRecordConfigGUI {

	const PLUGIN_CLASS_NAME = ilFlashcardQuestionsPlugin::class;
	const CONFIG_FORM_GUI_CLASS_NAME = ConfigFormGUI::class;
	const LANG_MODULE_CONFIG = "config";
}
