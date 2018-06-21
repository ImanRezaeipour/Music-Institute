<?php

/**
 * LevelComponent
 *
 * @package   Music Institute
 * @author    Iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 */
class LevelComponent extends Component {

	/**
	 * LevelComponent::isAdmin()
	 *
	 * @return bool
	 */
	public function isAdmin() {
		return true;
	}

	/**
	 * LevelComponent::isMaster()
	 *
	 * @return bool
	 */
	public function isMaster() {
		return true;
	}

	/**
	 * LevelComponent::isStudent()
	 *
	 * @return bool
	 */
	public function isStudent() {
		return true;
	}

	/**
	 * LevelComponent::isUser()
	 *
	 * @return bool
	 */
	public function isUser() {
		return true;
	}

	/**
	 * LevelComponent::isAnonymous()
	 *
	 * @return bool
	 */
	public function isAnonymous() {
		return true;
	}
}