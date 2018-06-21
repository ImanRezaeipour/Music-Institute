<?php

/**
 * LoginController
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class LoginController extends AppController {

	/**
	 * Controller Name
	 *
	 * @var string
	 */
	public $name = 'Login';

	/**
	 * Components List
	 *
	 * @var array
	 */
	public $components = array();

	/**
	 * Helpers List
	 *
	 * @var array
	 */
	public $helpers = array();

	/**
	 * Models List
	 *
	 * @var array
	 */
	public $uses = array();

	/**
	 * LoginController::index()
	 *
	 * @return void
	 */
	function index() {
		$this->redirect('/Login/logIn');
	}

	/**
	 * LoginController::logIn()
	 *
	 * @return void
	 */
	function logIn() {
		$this->set('level', __(''));
		$this->set('group', __('Login'));
		$this->set('title', __('Login'));
		$this->render('log_in', 'login');
	}

	/**
	 * LoginController::logOut()
	 *
	 * @return void
	 */
	function logOut() {
		$this->set('level', __(''));
		$this->set('group', __('Login'));
		$this->set('title', __('Logout'));
		$this->render('log_out', 'login');
	}
}