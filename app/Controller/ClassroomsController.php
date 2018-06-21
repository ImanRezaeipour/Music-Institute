<?php

/**
 * Classrooms Controller
 *
 * @package   app.Controller
 * @author    iman
 * @copyright 2012
 * @version   $Id$
 * @access    public
 *
 * @property LevelComponent    $Level
 * @property SessionComponent  $Session
 * @property Classroom         $Classroom
 *
 */
class ClassroomsController extends AppController {

	/**
	 * Controller Name
	 *
	 * @var string
	 */
	public $name = 'Classrooms';

	/**
	 * Components List
	 *
	 * @var array
	 */
	public $components = array('Session', 'Level');

	/**
	 * Helpers List
	 *
	 * @var array
	 */
	public $helpers = array('Form');

	/**
	 * Models List
	 *
	 *
	 * @var array
	 */
	public $uses = array('Classroom');

	/**
	 * ClassroomsController::index()
	 *
	 * @return void
	 */
	public function index() {
		if (!$this->Level->isAdmin()) {
			$this->redirect('/login');
		}
		$this->redirect('/Classrooms/view');
	}

	/**
	 * ClassroomsController::create()
	 *
	 * @return void
	 */
	public function create() {
		if (!$this->Level->isAdmin()) {
			$this->redirect('/login');
		}
		if (isset($_POST['action']) && $_POST['action'] == 'create') {
			if (isset($_POST['number']))
				$this->Classroom->set('classroom_room', $_POST['number']);
			$days = '';
			if (isset($_POST['sat']) && $_POST['sat'] == 'on')
				$days .= 'sat,';
			if (isset($_POST['sun']) && $_POST['sun'] == 'on')
				$days .= 'sun,';
			if (isset($_POST['mon']) && $_POST['mon'] == 'on')
				$days .= 'mon,';
			if (isset($_POST['tue']) && $_POST['tue'] == 'on')
				$days .= 'tue,';
			if (isset($_POST['wed']) && $_POST['wed'] == 'on')
				$days .= 'wed,';
			if (isset($_POST['thu']) && $_POST['thu'] == 'on')
				$days .= 'thu,';
			if (isset($_POST['fri']) && $_POST['fri'] == 'on')
				$days .= 'fri';

			//->Classroom->read(null,1);
			$this->Classroom->create();
			//$this->Classroom->set('classroom_id', 60);
			$this->Classroom->set('classroom_room', $_POST['number']);

			$this->Classroom->set('classroom_day', 'days');
			$this->Classroom->set('classroom_start_time', '08:00:00');
			$this->Classroom->set('classroom_end_time', '08:30:00');
			$this->Classroom->set('classroom_empty', true);

			if ($this->Classroom->save()) {
				$this->Session->setFlash('done.');
				$this->redirect('/classrooms/create');
			} else {
				;
				$this->Session->setFlash(debug($this->Classroom->validationErrors));
				$this->redirect('/classrooms/create');
			}
		}
		$this->set('level', __('Admin'));
		$this->set('group', __('Classrooms'));
		$this->set('title', __('Create Classroom'));
		$this->layout = 'admin/default';
		$this->render('create');
	}

	/**
	 * ClassroomsController::view()
	 *
	 * @param string $find
	 * @param int    $limit
	 * @param int    $page
	 * @param string $orderby
	 * @param string $order
	 *
	 * @return void
	 */
	public function view($find = 'all', $limit = 10, $page = 1, $orderby = 'id', $order = 'asc') {
		if (!$this->Level->isAdmin()) {
			$this->redirect('/login');
		}
		$this->set('classrooms', $this->Classroom->find('all'));
		$this->set('level', __('Admin'));
		$this->set('group', __('Classrooms'));
		$this->set('title', __('View Classroom'));
		$this->layout = 'admin/default';
		$this->render('view');
	}

	/**
	 * ClassroomsController::requestClassroom()
	 *
	 * @return void
	 */
	function request() {
		if ($this->Level->isAdmin()) {
			if (isset($_GET['request'])) {
				if ($_GET['request'] == 'view') {
					$search = $_GET['_search'];
					if ($search == 'true') {
						$searchField     = $_GET['searchField'];
						$searchString    = $_GET['searchString'];
						$searchOperation = $_GET['searchOper'];
						$filters         = $_GET['filters'];
					}
					$nd      = $_GET['nd'];
					$limit   = $_GET['rows'];
					$page    = $_GET['page'];
					$orderBy = $_GET['sidx'];
					$order   = $_GET['sord'];
					$count   = $this->Classroom->find('count');
					if ($count > 0) {
						$totalPages = ceil($count / $limit);
					} else {
						$totalPages = 0;
					}
					if ($page > $totalPages) {
						$page = $totalPages;
					}
					$start = $limit * $page - $limit;
					if ($start < 0) {
						$start = 0;
					}
					$result = $this->Classroom->query(
						'
					   SELECT *
					   FROM classrooms
					   ORDER BY ' . $orderBy . ' ' . $order . '
					   LIMIT ' . $start . ',' . $limit . '
					;');
					if ($search == 'true') {
						$result = $this->Classroom->query(
							'
					       SELECT *
					       FROM classrooms
                           WHERE ' . $searchField . '=' . $searchString . '
					       ORDER BY ' . $orderBy . ' ' . $order . '
					       LIMIT ' . $start . ',' . $limit . '
					       ;');
					}
					$responce->page    = $page;
					$responce->total   = $totalPages;
					$responce->records = $count;
					$i                 = 0;
					$rowCount          = sizeof($result);
					while ($rowCount) {
						$responce->rows[$i]['id']   = $i + 1;
						$responce->rows[$i]['cell'] = array(
							$result[$i]['classrooms']['classroom_id'],
							$result[$i]['classrooms']['classroom_room'],
							$result[$i]['classrooms']['classroom_day'],
							$result[$i]['classrooms']['classroom_start_time'],
							$result[$i]['classrooms']['classroom_end_time'],
							$result[$i]['classrooms']['classroom_empty']);
						$i++;
						$rowCount--;
					}
					echo json_encode($responce);
					$this->render('request', 'empty');
				}
			}
		}
	}

	public function remove($id = '') {
		if (!$this->Level->isAdmin()) {
			$this->redirect('/login');
		}
		if (isset($_POST['id'])) {
			$this->Classroom->set('id', $_POST['id']);
			if ($this->Classroom->delete($_POST['id'])) {
				$this->Session->setFlash('done.');
				$this->redirect('/classrooms/remove');
			} else {
				$this->Session->setFlash('fail.');
				$this->redirect('/classrooms/remove');
			}

		}
		$this->set('level', __('Admin'));
		$this->set('group', __('Classrooms'));
		$this->set('title', __('Remove Classroom'));
		$this->layout = 'admin/default';
		$this->render('remove');
	}
}