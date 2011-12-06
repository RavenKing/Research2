<?php
class ApplytablesController extends AppController {

	var $name = 'Applytables';
var $components = array('Acl', 'Auth', 'Session');
	function beforeFilter(){
    parent::beforeFilter();
	$this->Auth->allow('*');
	}
	function index() {
		$this->Applytable->recursive = 0;
		$this->set('applytables', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid applytable', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('applytable', $this->Applytable->read(null, $id));
	}

	function add() {
	$this->layout='searchpage';
		if (!empty($this->data)) {
			$this->Applytable->create();
			if ($this->Applytable->save($this->data)) {
				$this->Session->setFlash(__('The applytable has been saved', true));
				$this->redirect(array('controller' => 'projects','action'=>'home'));
			} else {
				$this->Session->setFlash(__('The applytable could not be saved. Please, try again.', true));
			}
		}
		$matches = $this->Applytable->Match->find('list');
		$this->set(compact('matches'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid applytable', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Applytable->save($this->data)) {
				$this->Session->setFlash(__('The applytable has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applytable could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Applytable->read(null, $id);
		}
		$matches = $this->Applytable->Match->find('list');
		$this->set(compact('matches'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for applytable', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Applytable->delete($id)) {
			$this->Session->setFlash(__('Applytable deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Applytable was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function home(){
	
	}
  function getcount($id=null)
  {
   if($id!=null)
    return $this->Applytable->find('count',array('conditions'=>array('Applytable.match_id'=>$id)));  
  }
  function listpeople($id=null)
  {
     $this->set('people',$this->Applytable->find('all',array('conditions'=>array('Applytable.match_id'=>$id))));
  }

   
}
?>

