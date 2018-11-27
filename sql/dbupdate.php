<#1>
<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

/**
 * Generated by srag\PluginGenerator v0.7.2
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */

\srag\Plugins\FlashcardQuestions\Config\Config::updateDB();
\srag\Plugins\FlashcardQuestions\Object\Obj::updateDB();
\srag\Plugins\FlashcardQuestions\Question\xfcqQuestion::updateDB();
?>
<#2>
<?php
\srag\DIC\DICStatic::dic()->database()->modifyTableColumn('copg_pobj_def', 'component', array( 'length' => 120 ));
\srag\DIC\DICStatic::dic()->database()->insert('copg_pobj_def', array(
	'parent_type' => array( 'text', 'xfcq' ),
	'class_name' => array( 'text', 'xfcqPageObject' ),
	'directory' => array( 'text', 'classes/PageObject' ),
	'component' => array( 'text', 'Customizing/global/plugins/Services/Repository/RepositoryObject/FlashcardQuestions' )
));
?>
<#3>
<?php
\srag\Plugins\FlashcardQuestions\Question\xfcqQuestion::updateDB();
?>
