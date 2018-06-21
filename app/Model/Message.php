<?php

/**
 * Message
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Message extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Message';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'messages';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'message_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('User');
}
