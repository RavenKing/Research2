<?php
class ProgressesController extends AppController {

	var $name = 'Progresses';
	    function beforeFilter(){
    parent::beforeFilter();
	
$lan=$this->Session->read('language');
if($lan!=null)
 Configure::write('Config.language',$lan);
	}

	function index() {
	   $this->Session->write('language','cn');
	$this->Progress->recursive = 0;
		$this->set('progresses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid progress', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('progress', $this->Progress->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Progress->create();
			if ($this->Progress->save($this->data)) {
				$this->Session->setFlash(__('The progress has been saved', true));
			if($this->data['Progress']['url']!="")
			{
			 $this->redirect($this->data['Progress']['url']);
			}else
			$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The progress could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid progress', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Progress->save($this->data)) {
				$this->Session->setFlash(__('The progress has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The progress could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Progress->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for progress', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Progress->delete($id)) {
			$this->Session->setFlash(__('Progress deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Progress was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
