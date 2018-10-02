<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

namespace srag\Plugins\FlashcardQuestions\Object;

use ActiveRecord;
use arConnector;
use ilFlashcardQuestionsPlugin;
use srag\DIC\DICTrait;

/**
 * Class Obj
 *
 * Generated by srag\PluginGenerator v0.7.2
 *
 * @package srag\Plugins\FlashcardQuestions\Object
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class Obj extends ActiveRecord {

	use DICTrait;
	const TABLE_NAME = "rep_robj_xfcq_obj";
	const PLUGIN_CLASS_NAME = ilFlashcardQuestionsPlugin::class;


	/**
	 * @return string
	 */
	public function getConnectorContainerName(): string {
		return self::TABLE_NAME;
	}


	/**
	 * @return string
	 *
	 * @deprecated
	 */
	public static function returnDbTableName(): string {
		return self::TABLE_NAME;
	}


	/**
	 * @param int $obj_id
	 *
	 * @return self|null
	 */
	public static function getObjectById(int $obj_id)/*: ?self*/ {
		/**
		 * @var self|null $object
		 */

		$object = self::where([
			"obj_id" => $obj_id
		])->first();

		return $object;
	}


	/**
	 * @var int
	 *
	 * @con_has_field    true
	 * @con_fieldtype    integer
	 * @con_length       8
	 * @con_is_notnull   true
	 * @con_is_primary   true
	 */
	protected $obj_id;
	/**
	 * @var bool
	 *
	 * @con_has_field    true
	 * @con_fieldtype    integer
	 * @con_length       1
	 * @con_is_notnull   true
	 */
	protected $is_online = false;


	/**
	 * Obj constructor
	 *
	 * @param int              $primary_key_value
	 * @param arConnector|null $connector
	 */
	public function __construct($primary_key_value = 0, arConnector $connector = NULL) {
		parent::__construct($primary_key_value, $connector);
	}


	/**
	 * @param string $field_name
	 *
	 * @return mixed|null
	 */
	public function sleep(/*string*/
		$field_name) {
		$field_value = $this->{$field_name};

		switch ($field_name) {
			case "is_online":
				return ($field_value ? 1 : 0);
				break;

			default:
				return NULL;
		}
	}


	/**
	 * @param string $field_name
	 * @param mixed  $field_value
	 *
	 * @return mixed|null
	 */
	public function wakeUp(/*string*/
		$field_name, $field_value) {
		switch ($field_name) {
			case "obj_id":
				return intval($field_value);
				break;

			case "is_online":
				return boolval($field_value);
				break;

			default:
				return NULL;
		}
	}


	/**
	 * @return int
	 */
	public function getObjId(): int {
		return $this->obj_id;
	}


	/**
	 * @param int $obj_id
	 */
	public function setObjId(int $obj_id)/*: void*/ {
		$this->obj_id = $obj_id;
	}


	/**
	 * @return bool
	 */
	public function isOnline(): bool {
		return $this->is_online;
	}


	/**
	 * @param bool $is_online
	 */
	public function setOnline(bool $is_online = true)/*: void*/ {
		$this->is_online = $is_online;
	}
}
