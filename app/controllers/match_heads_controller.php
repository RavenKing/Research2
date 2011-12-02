<?php
class MatchHeadsController extends AppController {

	var $name = 'MatchHeads';

	function index() {
		$this->MatchHead->recursive = 0;
		$this->set('matchHeads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid match head', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('matchHead', $this->MatchHead->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MatchHead->create();
			if ($this->MatchHead->save($this->data)) {
				$this->Session->setFlash(__('The match head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match head could not be saved. Please, try again.', true));
			}
		}
		$matches = $this->MatchHead->Match->find('list');
		$this->set(compact('matches'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid match head', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MatchHead->save($this->data)) {
				$this->Session->setFlash(__('The match head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match head could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MatchHead->read(null, $id);
		}
		$matches = $this->MatchHead->Match->find('list');
		$this->set(compact('matches'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for match head', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MatchHead->delete($id)) {
			$this->Session->setFlash(__('Match head deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Match head was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function gethead($id=null)
	{
	return $this->MatchHead->find('first',array('conditions'=>array('MatchHead.match_id'=>$id)));
	
	}
}
