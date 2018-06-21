<?php

/**
 * Visit
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Visit extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Visit';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'visits';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'visit_id';
}
