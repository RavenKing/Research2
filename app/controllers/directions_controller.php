<?php
class DirectionsController extends AppController {

	var $name = 'Directions';
	    function beforeFilter(){
    parent::beforeFilter();
	
$lan=$this->Session->read('language');
if($lan!=null)
 Configure::write('Config.language',$lan);
	}
	function index() {
		$this->Direction->recursive = 0;
		$this->set('directions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid direction', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('direction', $this->Direction->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Direction->create();
			if ($this->Direction->save($this->data)) {
				$this->Session->setFlash(__('The direction has been saved', true));
				$this->redirect($this->data['Direction']['url']);
			} else {
				$this->Session->setFlash(__('The direction could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid direction', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Direction->save($this->data)) {
				$this->Session->setFlash(__('The direction has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The direction could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Direction->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for direction', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Direction->delete($id)) {
			$this->Session->setFlash(__('Direction deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Direction was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function getlist()
	{
	
	return $this->Direction->find('list');
	}
	function getcount()
	{
		
	return $this->Direction->find('count');

	}
	}
