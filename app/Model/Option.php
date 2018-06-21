<?php

/**
 * Option
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Option extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Option';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'options';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'option_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('User');
}
