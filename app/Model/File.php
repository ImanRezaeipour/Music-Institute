<?php

/**
 * File
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class File extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'File';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'files';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'file_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('User');
}
