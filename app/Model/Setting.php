<?php

/**
 * Setting
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Setting extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Setting';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'settings';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'setting_id';
}
