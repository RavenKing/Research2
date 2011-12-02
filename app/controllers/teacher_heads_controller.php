<?php
class TeacherHeadsController extends AppController {

	var $name = 'TeacherHeads';

	function index() {
		$this->TeacherHead->recursive = 0;
		$this->set('teacherHeads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid teacher head', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('teacherHead', $this->TeacherHead->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TeacherHead->create();
			if ($this->TeacherHead->save($this->data)) {
				$this->Session->setFlash(__('The teacher head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher head could not be saved. Please, try again.', true));
			}
		}
		$teachers = $this->TeacherHead->Teacher->find('list');
		$this->set(compact('teachers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid teacher head', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TeacherHead->save($this->data)) {
				$this->Session->setFlash(__('The teacher head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher head could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TeacherHead->read(null, $id);
		}
		$teachers = $this->TeacherHead->Teacher->find('list');
		$this->set(compact('teachers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for teacher head', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TeacherHead->delete($id)) {
			$this->Session->setFlash(__('Teacher head deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Teacher head was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
  function gethead($id=null)
  {
   return $this->TeacherHead->find('first',array('conditions'=>array('TeacherHead.teacher_id'=>$id)));
  
  }

  
 }
