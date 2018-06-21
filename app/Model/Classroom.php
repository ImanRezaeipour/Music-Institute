<?php

/**
 * Classroom
 *
 * @package   app.Controller
 * @author    iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Classroom extends AppModel {

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'classrooms';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'classroom_id';
	//public $tablePrefix='mi_';

	public $_schema = array(
		'classroom_id'=> array(
			'type'  => 'integer',
			'length'=> 200
		)
	);
	/**
	 * Table Field Validation
	 *
	 * @var array
	 */
	public $validate = array(
		'classroom_id'         => array(
			'numeric'  => array(
				'rule'       => 'numeric',
				'message'    => 'Id: only numbers allowed.'
			),
			'required' => array(
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'Id: required.'
			)
		),
		'classroom_room'       => array(
			'numeric' => array(
				'rule'       => 'numeric',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'classroom room is empty.'
			)
		),
		'classroom_day'        => array(
			'alphaNumeric' => array(
				'rule'       => 'alphaNumeric',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'Only alphabets and numbers allowed'
			)
		),
		'classroom_start_time' => array(
			'time' => array(
				'rule'       => 'time',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'classroom start time is empty.'
			)
		),
		'classroom_end_time'   => array(
			'time' => array(
				'rule'       => 'time',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'classroom end time is empty.'
			)
		),
		'classroom_empty'      => array(
			'boolean' => array(
				'rule'       => 'boolean',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'classroom empty is empty.'
			)
		),
	);
}