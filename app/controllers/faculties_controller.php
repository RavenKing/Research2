<?php
class FacultiesController extends AppController {

	var $name = 'Faculties';
	    function beforeFilter(){
    parent::beforeFilter();
	
$lan=$this->Session->read('language');
if($lan!=null)
 Configure::write('Config.language',$lan);
}
	function index() {
		$this->Faculty->recursive = 0;
		$this->set('faculties', $this->paginate());
	}
	function home()
	{
	$lan=$this->Session->read('language');
	echo $lan;
 Configure::write('Config.language',$lan);
	$this->layout='faculty';
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid faculty', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('faculty', $this->Faculty->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Faculty->create();
			if ($this->Faculty->save($this->data)) {
				$this->Session->setFlash(__('The faculty has been saved', true));
				$this->redirect($this->data['Faculty']['url']);
			} else {
				$this->Session->setFlash(__('The faculty could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid faculty', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Faculty->save($this->data)) {
				$this->Session->setFlash(__('The faculty has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faculty could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Faculty->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for faculty', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Faculty->delete($id)) {
			$this->Session->setFlash(__('Faculty deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Faculty was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function getfaculties()
	{
	return $this->Faculty->find('list');
	}
	function getcount()
	{
	return $this->Faculty->find('count');
	}
}
