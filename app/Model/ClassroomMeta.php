<?php

/**
 * ClassroomMeta
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class ClassroomMeta extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'ClassroomMeta';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'classrooms_meta';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'classroom_meta_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('Classroom', 'Master', 'Student', 'MusicalInstrument');

	/**
	 * Table Field Validation
	 *
	 * @var array
	 */
	public $validate = array(
		'classroom_meta_id'         => array(
			'numeric' => array(
				'rule'       => 'numeric',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'classroom meta id is empty.')),
		'classroom_id'              => array(
			'numeric' => array(
				'rule'       => 'numeric',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'classroom id is empty.')),
		'classroom_meta_session'    => array(
			'numeric' => array(
				'rule'       => 'numeric',
				'required'   => false,
				'allowEmpty' => true,
				'message'    => 'classroom meta session is empty.')),
		'classroom_meta_start_date' => array(
			'date' => array(
				'rule'       => 'date',
				'required'   => false,
				'allowEmpty' => true,
				'message'    => 'classroom meta start date is empty.')),
		'classroom_meta_end_date'   => array(
			'date' => array(
				'rule'       => 'date',
				'required'   => false,
				'allowEmpty' => true,
				'message'    => 'classroom meta end date is empty.')),
		'classroom_meta_level'      => array(
			'numeric' => array(
				'rule'       => 'numeric',
				'required'   => false,
				'allowEmpty' => true,
				'message'    => 'classroom meta level is empty.')),
	);
}