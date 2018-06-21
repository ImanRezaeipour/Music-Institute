<?php

/**
 * Link
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Link extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Link';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'links';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'link_id';
}
