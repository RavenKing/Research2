<?php
class MatchawardsController extends AppController {

	var $name = 'Matchawards';

	function index() {
		$this->Matchaward->recursive = 0;
		$this->set('matchawards', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid matchaward', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('matchaward', $this->Matchaward->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Matchaward->create();
			if ($this->Matchaward->save($this->data)) {
				$this->Session->setFlash(__('The matchaward has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matchaward could not be saved. Please, try again.', true));
			}
		}
		$matches = $this->Matchaward->Match->find('list');
		$this->set(compact('matches'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid matchaward', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Matchaward->save($this->data)) {
				$this->Session->setFlash(__('The matchaward has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matchaward could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Matchaward->read(null, $id);
		}
		$matches = $this->Matchaward->Match->find('list');
		$this->set(compact('matches'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for matchaward', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Matchaward->delete($id)) {
			$this->Session->setFlash(__('Matchaward deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Matchaward was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
function getawards($id=null)
{
   if($id!=null)
   {
   return $this->Matchaward->find('all',array('conditions'=>array('match_id'=>$id)));
   
   }

}
	
	}
