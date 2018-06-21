<?php

	/**
	 * Master
	 *
	 * @package   Music Institute
	 * @author    Iman
	 * @copyright 2012
	 * @version   $Id$
	 * @access    public
	 */
class Master extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Master';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'masters';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'master_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('User');
}
