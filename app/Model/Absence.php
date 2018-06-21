<?php

/**
 * Absence
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Absence extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Absence';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'absences';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'absence_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('Student');
}
