<?php


/**
 * Administrator
 *
 * @package Music Institute
 * @author Iman
 * @copyright 2012
 * @version $Id$
 * @access public
 */
class Administrator extends AppModel {

	/**
	 * Model Name
	 *
	 * @var string
	 */
	public $name = 'Administrator';

	/**
	 * Table Name
	 *
	 * @var string
	 */
	public $useTable = 'administrators';

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
	public $primaryKey = 'administrator_id';

	/**
	 * Association 1-1
	 *
	 * @var array
	 */
	public $hasOne = array('User');

    /**
     * Table Field Validation
     *
     * @var array
     */
	public $validate = array(
		'user_meta_id' => array('numeric' => array(
				'rule' => 'numeric',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'user meta id is empty.')),
		'user_id' => array('numeric' => array(
				'rule' => 'numeric',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'user id is empty.')),
		'user_meta_firstname' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user firstname is empty.')),
		'user_meta_lastname' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user lastname is empty.')),
		'user_meta_sex' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user sex is empty.')),
		'user_meta_picture' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user picture is empty.')),
		'user_meta_nickname' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user nickname is empty.')),
		'user_meta_fathername' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user fathername is empty.')),
		'user_meta_code' => array('numeric' => array(
				'rule' => 'numeric',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user code is empty.')),
		'user_meta_birthday' => array('dateTime' => array(
				'rule' => 'dateTime',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user birthday is empty.')),
		'user_meta_job' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user job is empty.')),
		'user_meta_address' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user address is empty.')),
		'user_meta_phone' => array('numeric' => array(
				'rule' => 'numeric',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user phone is empty.')),
		'user_meta_mobile' => array('numeric' => array(
				'rule' => 'numeric',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user mobile is empty.')),
		'user_meta_website' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user website is empty.')),
		'user_meta_about' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user about is empty.')),
		'user_meta_proof' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user proof is empty.')),
		'user_meta_filament' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user filament is empty.')),
		'user_meta_zipcode' => array('numeric' => array(
				'rule' => 'numeric',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user zipcode is empty.')),
		'user_meta_presenter' => array('alpha' => array(
				'rule' => 'alpha',
				'required' => false,
				'allowEmpty' => true,
				'message' => 'user presenter is empty.')),
		);
}

?>