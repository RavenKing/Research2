<?php
class ProjectHeadsController extends AppController {

	var $name = 'ProjectHeads';

	function index() {
		$this->ProjectHead->recursive = 0;
		$this->set('projectHeads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid project head', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('projectHead', $this->ProjectHead->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProjectHead->create();
			if ($this->ProjectHead->save($this->data)) {
				$this->Session->setFlash(__('The project head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project head could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->ProjectHead->Project->find('list');
		$this->set(compact('projects'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project head', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProjectHead->save($this->data)) {
				$this->Session->setFlash(__('The project head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project head could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProjectHead->read(null, $id);
		}
		$projects = $this->ProjectHead->Project->find('list');
		$this->set(compact('projects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for project head', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProjectHead->delete($id)) {
			$this->Session->setFlash(__('Project head deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Project head was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function gethead($id=null)
	{
	 return $this->ProjectHead->find('first',array('conditions'=>array('ProjectHead.project_id'=>$id)));
	
	}
	}
