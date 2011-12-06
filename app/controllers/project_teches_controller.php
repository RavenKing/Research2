<?php
class ProjectTechesController extends AppController {

	var $name = 'ProjectTeches';
	    function beforeFilter(){
    parent::beforeFilter();
	
$lan=$this->Session->read('language');
if($lan!=null)
 Configure::write('Config.language',$lan);
	}
	function index() {
		$this->ProjectTech->recursive = 0;
		$this->set('projectTeches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid project tech', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('projectTech', $this->ProjectTech->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProjectTech->create();
			if ($this->ProjectTech->save($this->data)) {
				$this->Session->setFlash(__('The project tech has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project tech could not be saved. Please, try again.', true));
			}
		}
		$projects = $this->ProjectTech->Project->find('list');
		$techniques = $this->ProjectTech->Technique->find('list');
		$this->set(compact('projects', 'techniques'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project tech', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProjectTech->save($this->data)) {
				$this->Session->setFlash(__('The project tech has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project tech could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProjectTech->read(null, $id);
		}
		$projects = $this->ProjectTech->Project->find('list');
		$techniques = $this->ProjectTech->Technique->find('list');
		$this->set(compact('projects', 'techniques'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for project tech', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProjectTech->delete($id)) {
			$this->Session->setFlash(__('Project tech deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Project tech was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function multiadd($id=null)
	{
   $this->set('getid',$id);
   if(!empty($this->data))
   {
   print_r($this->data);
     $projectid=$this->data['ProjectTeches']['project_id'];
     foreach($this->data['ProjectTeches']['technique_id'] as $result)
{
    $this->ProjectTech->create();
	$pcd=array('ProjectTech'=>array('project_id'=> $projectid,
		'technique_id'=>$result));
		$this->ProjectTech->save($pcd);
}	 
   $this->redirect(array('controller'=>'projects','action'=>'index'));
   }
	
	}
	
	
	}
