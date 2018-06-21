<?php

/**
 * News
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class News extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'News';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'news';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'news_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('Administrator');
}
