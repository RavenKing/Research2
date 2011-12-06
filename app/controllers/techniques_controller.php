<?php
class TechniquesController extends AppController {

	var $name = 'Techniques';
	    function beforeFilter(){
    parent::beforeFilter();
	
$lan=$this->Session->read('language');
if($lan!=null)
 Configure::write('Config.language',$lan);
	}
	function index() {
		$this->Technique->recursive = 0;
		$this->set('techniques', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid technique', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('technique', $this->Technique->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Technique->create();
			if ($this->Technique->save($this->data)) {
				$this->Session->setFlash(__('The technique has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The technique could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid technique', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Technique->save($this->data)) {
				$this->Session->setFlash(__('The technique has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The technique could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Technique->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for technique', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Technique->delete($id)) {
			$this->Session->setFlash(__('Technique deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Technique was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function getlist()
	{
	return $this->Technique->find('list');
	
	}
}
