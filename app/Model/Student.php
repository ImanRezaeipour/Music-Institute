<?php

/**
 * Student
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Student extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Student';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'students';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'student_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('User');
}
