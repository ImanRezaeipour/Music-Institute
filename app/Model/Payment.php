<?php

/**
 * Payment
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class Payment extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Payment';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'payments';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'payment_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('Student');
}
