<?php
class TeachersController extends AppController {

	var $name = 'Teachers';	    
	var $uses=array('Teacher','TeacherHead');
	var $paginate = array(
	'limit'=>4
);
	function beforeFilter(){
    parent::beforeFilter();
	
$lan=$this->Session->read('language');
if($lan!=null)
 Configure::write('Config.language',$lan);
	}

	function index() {
		$this->Teacher->recursive = 0;
		$this->set('teachers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('teacher', $this->Teacher->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Teacher->create();
			if ($this->Teacher->save($this->data)) {
				$this->Session->setFlash(__('The teacher has been saved', true));
			$this->TeacherHead->create();
				 $pcd=array('TeacherHead'=>array('src'=>$this->data['Teacher']['src'],
			'teacher_id'=>$this->Teacher->id));
		if($this->TeacherHead->save($pcd));
	//	 echo "success";
		$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.', true));
			}
		}
		$faculties = $this->Teacher->Faculty->find('list');
		$this->set(compact('faculties'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Teacher->save($this->data)) {
				$this->Session->setFlash(__('The teacher has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Teacher->read(null, $id);
		}
		$faculties = $this->Teacher->Faculty->find('list');
		$this->set(compact('faculties'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for teacher', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Teacher->delete($id)) {
			$this->Session->setFlash(__('Teacher deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Teacher was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function getlist()
	{
	return $this->Teacher->find('list');
	}
	function home($id=null)
	{
	$this->layout='projectview';
	$result=$this->Teacher->find('first',array('conditions'=>array('Teacher.id'=>$id)));
	$this->set('teachers',$result);
	}
	function listteacher()
	{
	$this->layout='projectview';
		$this->Teacher->recursive = 0;
		$this->set('teacher', $this->paginate());
	}
	function getcount()
	{
	
	return $this->Teacher->find('count');
	}
}
