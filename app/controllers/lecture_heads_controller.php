<?php
class LectureHeadsController extends AppController {

	var $name = 'LectureHeads';

	function index() {
		$this->LectureHead->recursive = 0;
		$this->set('lectureHeads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid lecture head', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lectureHead', $this->LectureHead->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LectureHead->create();
			if ($this->LectureHead->save($this->data)) {
				$this->Session->setFlash(__('The lecture head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecture head could not be saved. Please, try again.', true));
			}
		}
		$lectures = $this->LectureHead->Lecture->find('list');
		$this->set(compact('lectures'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid lecture head', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LectureHead->save($this->data)) {
				$this->Session->setFlash(__('The lecture head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lecture head could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LectureHead->read(null, $id);
		}
		$lectures = $this->LectureHead->Lecture->find('list');
		$this->set(compact('lectures'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for lecture head', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LectureHead->delete($id)) {
			$this->Session->setFlash(__('Lecture head deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Lecture head was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
    function gethead($id=null)
	{
	return $this->LectureHead->find('first',array('conditions'=>array('LectureHead.lecture_id'=>$id)));
	 
	}
	
	}
