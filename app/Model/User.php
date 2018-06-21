<?php

/**
 * User
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class User extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'User';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'users';

	/**
	 * Table Prefix
	 *
	 * @var string
	 */
	//public $tablePrefix = 'mi_';

	/**
	 * Model Id
	 *
	 * @var string
	 */
	public $primaryKey = 'user_id';

	/**
	 * Behaviors List
	 *
	 * @var array
	 */
	public $actsAs = array();

	/**
	 * Table Field Validation
	 *
	 * @var array
	 */
	public $validate = array(
		'user_id'           => array(
			'numeric' => array(
				'rule'       => 'numeric',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'user id is empty.')),
		'user_email'        => array(
			'email' => array(
				'rule'       => 'email',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'user email is empty.')),
		'user_password'     => array(
			'password' => array(
				'rule'       => 'password',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'user password is empty.')),
		'user_registered'   => array(
			'datetime' => array(
				'rule'       => 'datetime',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'user registered is empty.')),
		'user_display_name' => array(
			'alpha' => array(
				'rule'       => 'alpha',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'user display name is empty.')),
		'user_role'         => array(
			'alpha' => array(
				'rule'       => 'alpha',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'user role is empty.')),
	);
}