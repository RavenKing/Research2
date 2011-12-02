<?php
class LecturesController extends AppController {

	var $name = 'Lectures';
	var $uses=array('Lecture','LectureHead');
	    function beforeFilter(){
    parent::beforeFilter();
	
$lan=$this->Session->read('language');
if($lan!=null)
 Configure::write('Config.language',$lan);
	}
	function index() {
		$this->Lecture->recursive = 0;
		$this->set('lectures', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid lecture', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lecture', $this->Lecture->read(null, $id));
	}

	function add() {
	
	$this->layout='form';
		if (!empty($this->data)) {
			$this->Lecture->create();
			if ($this->Lecture->save($this->data)) {
				$this->Session->setFlash(__('The lecture has been saved', true));
				$this->LectureHead->create();
				$pcd=array('LectureHead'=>array('lecture_id'=>$this->Lecture->id,'src'=>$this->data['Lecture']['src']));
				if($this->LectureHead->save($pcd))
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecture could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid lecture', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lecture->save($this->data)) {
				$this->Session->setFlash(__('The lecture has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecture could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lecture->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for lecture', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Lecture->delete($id)) {
			$this->Session->setFlash(__('Lecture deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Lecture was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
     function home($id=null)
	 {
	 $this->layout='lecture';
if($id==null)
    {	 $this->Lecture->recursive = 0;
		$this->set('lectures', $this->paginate());
	 }
	 else
	 {
	 
	 
	 }
	 }
	
  function getcount()
{

return  $this->Lecture->find('count');
}  
function getrecent()
{

return $this->Lecture->find("all",array('order'=>array('Lecture.created DESC'),'limit'=>5));
	
}
	}
