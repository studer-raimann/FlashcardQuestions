<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05fdcde5cf7b9d84691abcd500488dbe
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\' => 29,
            'srag\\Plugins\\FlashcardQuestions\\' => 32,
            'srag\\DIC\\' => 9,
            'srag\\ActiveRecordConfig\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\FlashcardQuestions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\ActiveRecordConfig\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'FlashcardQuestionsRemoveDataConfirm' => __DIR__ . '/../..' . '/classes/uninstall/class.FlashcardQuestionsRemoveDataConfirm.php',
        'ilFlashcardQuestionsConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilFlashcardQuestionsConfigGUI.php',
        'ilFlashcardQuestionsPlugin' => __DIR__ . '/../..' . '/classes/class.ilFlashcardQuestionsPlugin.php',
        'ilObjFlashcardQuestions' => __DIR__ . '/../..' . '/classes/class.ilObjFlashcardQuestions.php',
        'ilObjFlashcardQuestionsAccess' => __DIR__ . '/../..' . '/classes/class.ilObjFlashcardQuestionsAccess.php',
        'ilObjFlashcardQuestionsGUI' => __DIR__ . '/../..' . '/classes/class.ilObjFlashcardQuestionsGUI.php',
        'ilObjFlashcardQuestionsListGUI' => __DIR__ . '/../..' . '/classes/class.ilObjFlashcardQuestionsListGUI.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\DIC\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\DIC\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/LegacyDIC.php',
        'srag\\DIC\\DIC\\NewDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/NewDIC.php',
        'srag\\DIC\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\Plugins\\FlashcardQuestions\\Config\\Config' => __DIR__ . '/../..' . '/src/Config/Config.php',
        'srag\\Plugins\\FlashcardQuestions\\Config\\ConfigFormGUI' => __DIR__ . '/../..' . '/src/Config/ConfigFormGUI.php',
        'srag\\Plugins\\FlashcardQuestions\\Object\\Obj' => __DIR__ . '/../..' . '/src/Object/Obj.php',
        'srag\\Plugins\\FlashcardQuestions\\Object\\ObjSettingsFormGUI' => __DIR__ . '/../..' . '/src/Object/ObjSettingsFormGUI.php',
        'srag\\RemovePluginDataConfirm\\AbstractPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\AbstractRemovePluginDataConfirm' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
        'srag\\RemovePluginDataConfirm\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\RemovePluginDataConfirmException' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RemovePluginDataConfirmException.php',
        'srag\\RemovePluginDataConfirm\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05fdcde5cf7b9d84691abcd500488dbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05fdcde5cf7b9d84691abcd500488dbe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05fdcde5cf7b9d84691abcd500488dbe::$classMap;

        }, null, ClassLoader::class);
    }
}
