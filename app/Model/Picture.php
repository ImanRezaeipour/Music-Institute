<?php

/**
 * Picture
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Picture extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Picture';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'pictures';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'picture_id';
}
