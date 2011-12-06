<?php
class MessageboardsController extends AppController {

	var $name = 'Messageboards';

	function index() {
     $this->layout='listp';
	$this->Messageboard->recursive = 0;
		$this->set('messageboards', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid messageboard', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('messageboard', $this->Messageboard->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Messageboard->create();
			if ($this->Messageboard->save($this->data)) {
				$this->Session->setFlash(__('The messageboard has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The messageboard could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid messageboard', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Messageboard->save($this->data)) {
				$this->Session->setFlash(__('The messageboard has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The messageboard could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Messageboard->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for messageboard', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Messageboard->delete($id)) {
			$this->Session->setFlash(__('Messageboard deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Messageboard was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
