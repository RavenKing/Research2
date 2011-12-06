<?php
class XisController extends AppController {

	var $name = 'Xis';

	function index() {
		$this->Xi->recursive = 0;
		$this->set('xis', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid xi', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('xi', $this->Xi->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Xi->create();
			if ($this->Xi->save($this->data)) {
				$this->Session->setFlash(__('The xi has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The xi could not be saved. Please, try again.', true));
			}
		}
		$faculties = $this->Xi->Faculty->find('list');
		$this->set(compact('faculties'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid xi', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Xi->save($this->data)) {
				$this->Session->setFlash(__('The xi has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The xi could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Xi->read(null, $id);
		}
		$faculties = $this->Xi->Faculty->find('list');
		$this->set(compact('faculties'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for xi', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Xi->delete($id)) {
			$this->Session->setFlash(__('Xi deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Xi was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function getxis($id)
	{
	
	return $this->Xi->find('list',array('conditions'=>array('Xi.faculty_id'=>$id)));
	
	}
}
