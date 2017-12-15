<?php

require_once('./Customizing/global/plugins/Services/Repository/RepositoryObject/DhbwTraining/Interface/Settings/interface.xdhtSettingsInterface.php');
/**
 * Class xdhtSettings
 *
 * @author: Benjamin Seglias   <bs@studer-raimann.ch>
 */

class xdhtSettings extends ActiveRecord implements xdhtSettingsInterface {

	/**
	 * @return string
	 */
	public static function returnDbTableName() {
		return self::TABLE_NAME;
	}

	/**
	 * @return string
	 */
	public function getConnectorContainerName() {
		return self::TABLE_NAME;
	}

	/**
	 * @var int
	 *
	 * @db_has_field        true
	 * @db_fieldtype        integer
	 * @db_length           8
	 * @db_is_primary       true
	 * @con_sequence        true
	 */
	protected $id;

	/**
	 * @var int
	 *
	 * @db_has_field  true
	 * @db_fieldtype  integer
	 * @db_length     4
	 * @db_is_notnull true
	 */
	protected $dhbw_training_object_id;

	/**
	 * @var int
	 *
	 * @db_has_field  true
	 * @db_fieldtype  integer
	 * @db_length     4
	 */
	protected $question_pool_id;

	/**
	 * @var int
	 *
	 * @db_has_field  true
	 * @db_fieldtype  integer
	 * @db_length     1
	 * @db_is_notnull true
	 */
	protected $is_online = 0;

	/**
	 * @var string
	 *
	 * @db_has_field        true
	 * @db_fieldtype        timestamp
	 */
	protected $start_date;

	/**
	 * @var string
	 *
	 * @db_has_field        true
	 * @db_fieldtype        timestamp
	 */
	protected $end_date;



	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}


	/**
	 * @param int $id
	 */
	public function setId($id) {
		$this->id = $id;
	}


	/**
	 * @return int
	 */
	public function getDhbwTrainingObjectId() {
		return $this->dhbw_training_object_id;
	}


	/**
	 * @param int $dhbw_training_object_id
	 */
	public function setDhbwTrainingObjectId($dhbw_training_object_id) {
		$this->dhbw_training_object_id = $dhbw_training_object_id;
	}


	/**
	 * @return int
	 */
	public function getQuestionPoolId() {
		return $this->question_pool_id;
	}


	/**
	 * @param int $question_pool_id
	 */
	public function setQuestionPoolId($question_pool_id) {
		$this->question_pool_id = $question_pool_id;
	}


	/**
	 * @return int
	 */
	public function getisOnline() {
		return $this->is_online;
	}


	/**
	 * @param int $is_online
	 */
	public function setIsOnline($is_online) {
		$this->is_online = $is_online;
	}


	/**
	 * @return string
	 */
	public function getStartDate() {
		return $this->start_date;
	}


	/**
	 * @param string $start_date
	 */
	public function setStartDate($start_date) {
		$this->start_date = $start_date;
	}


	/**
	 * @return string
	 */
	public function getEndDate() {
		return $this->end_date;
	}


	/**
	 * @param string $end_date
	 */
	public function setEndDate($end_date) {
		$this->end_date = $end_date;
	}


}