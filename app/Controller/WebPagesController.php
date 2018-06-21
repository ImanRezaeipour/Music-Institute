<?php

/**
 * WebPages Controller
 *
 * @package   app.Controller
 * @author    iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class WebPagesController extends AppController {

	/**
	 * Controller Name
	 *
	 * @var string
	 */
	public $name = 'WebPages';

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
	 * WebPagesController::index()
	 *
	 * @return void
	 */
	function index() {
		$this->set('level', __('Public'));
		$this->set('group', __('WebPages'));
		$this->set('title', __('Home Page'));
		$this->layout = 'public/default';
		$this->render('index');
	}
}