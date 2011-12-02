<?php
class MatchTechesController extends AppController {

	var $name = 'MatchTeches';

	function index() {
		$this->MatchTech->recursive = 0;
		$this->set('matchTeches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid match tech', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('matchTech', $this->MatchTech->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MatchTech->create();
			if ($this->MatchTech->save($this->data)) {
				$this->Session->setFlash(__('The match tech has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match tech could not be saved. Please, try again.', true));
			}
		}
		$matches = $this->MatchTech->Match->find('list');
		$techniques = $this->MatchTech->Technique->find('list');
		$this->set(compact('matches', 'techniques'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid match tech', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MatchTech->save($this->data)) {
				$this->Session->setFlash(__('The match tech has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match tech could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MatchTech->read(null, $id);
		}
		$matches = $this->MatchTech->Match->find('list');
		$techniques = $this->MatchTech->Technique->find('list');
		$this->set(compact('matches', 'techniques'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for match tech', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MatchTech->delete($id)) {
			$this->Session->setFlash(__('Match tech deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Match tech was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
