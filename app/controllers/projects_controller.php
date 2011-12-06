<?php
class ProjectsController extends AppController {
    var $uses=array('Project','ProjectHead');
	var $name = 'Projects';
	var $paginate = array(
	'limit'=>5,
	'order'=>array('Project.created'=>'desc')	
);

    function beforeFilter(){
    parent::beforeFilter();
$lan=$this->Session->read('language');
if($lan!=null)
 Configure::write('Config.language',$lan);
	}
	function index() {
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

	function view($id = null) {
	$this->layout='projectview';
		if (!$id) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}

	function add() {
       $this->layout='form';
	if (!empty($this->data)) {
			$this->Project->create();
			$this->ProjectHead->create();
			if ($this->Project->save($this->data)) {
			print_r($this->data);
			//$id=$this->data['Project']['id'];	
			$pcd=array('ProjectHead'=>array('project_id'=>$this->Project->id,
			                'src'=>$this->data['Project']['src']));
			print_r($pcd);
			if($this->ProjectHead->save($pcd))
		$this->redirect(array('controller'=>'Projects','action' => 'index'));
   
//	$this->redirect(array('controller'=>'progresses','action'=>'multiadd'));		
		} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.', true));
			}
		}
		$teachers = $this->Project->Teacher->find('list');
		$directions = $this->Project->Direction->find('list');
		$progresses = $this->Project->Progress->find('list');
		$faculties=$this->Project->Faculty->find('list');
		$xis=$this->Project->Xi->find('list');
		$this->set(compact('teachers', 'directions', 'progresses','faculties','xis'));
	}
	
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid project', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Project->save($this->data)) {
				$this->Session->setFlash(__('The project has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$teachers = $this->Project->Teacher->find('list');
		$directions = $this->Project->Direction->find('list');
		$progresses = $this->Project->Progress->find('list');
		$faculties=$this->Project->Faculty->find('list');
		$xis=$this->Project->Xi->find('list');
		$this->set(compact('teachers', 'directions', 'progresses','faculties','xis'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for project', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Project->delete($id)) {
			$this->Session->setFlash(__('Project deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Project was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function home()
	{
	$this->layout='home';
	}
	function listproject($id=null)
	{
	$this->layout='listp';
	 $referer=Controller::referer();
	if($referer=="/faculties/home"&&$id!=null)
	{
	// $results=$this->Project->find('all',array('conditions'=>array('Project.faculty_id'=>$id)));
	 $results=$this->paginate('Project', array('Project.id' =>$id));
	}
	else if($id==null)
	{
	 $results=$this->paginate('Project');
	}
	else
	{
	 $results=$this->paginate('Project', array('Project.direction_id' =>$id));
	}
	
	$this->set('projects',$results);
	}
	function getrecent()
	{
	return $this->Project->find("all",array('order'=>array('Project.created DESC'),'limit'=>2));
	}
	function searchpage()
	{
	$this->layout='searchpage';
	}
	function searchresult()
	{
	$this->layout='listp';
	if(!empty($this->data))
	{
	//print_r($this->data);
	if($this->data['projectname']!=null)
	{
	 $pname=$this->data['projectname'];
	}
	else $pname="";
	//if($this->data['teachername']!=null)
	{
	//$tname=$this->data['teachername'];
	}	
	
	if($this->data['description']!=null)
	{
	$description=$this->data['description'];
	}else $description="";
	
	$result=$this->Project->find('all',array('conditions'=>array('Project.name LIKE'=>"%$pname%",
																'Project.description LIKE'=>"%$description%"
	                                                                    )));
	//print_r($result);
	$this->set('projects',$result);
	}
	
	
	}
	function getcount()
	{
	return $this->Project->find('count');
	}
  function about()
{
$this->layout='about';}  
}
