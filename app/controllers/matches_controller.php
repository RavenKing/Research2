<?php
class MatchesController extends AppController {

	var $name = 'Matches';
   var $uses=array('Match','MatchTech','MatchHead');
   	    function beforeFilter(){
    parent::beforeFilter();
	
$lan=$this->Session->read('language');
if($lan!=null)
 Configure::write('Config.language',$lan);
	}
	function index() {
		$this->Match->recursive = 0;
		$this->set('matches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid match', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('match', $this->Match->read(null, $id));
	}

	function add() {
	$this->layout='form';
		if (!empty($this->data)) {
			$this->Match->create();
			if ($this->Match->save($this->data)) {
				$this->Session->setFlash(__('The match has been saved', true));
				foreach($this->data['Match']['technique_id'] as $result)
				{
				 $this->MatchTech->create();
				 $pcd=array('MatchTech'=>array('match_id'=> $this->Match->id,
			'technique_id'=>$result));
		$this->MatchTech->save($pcd);
				
				}
				$this->MatchHead->create();
				$phd=array('MatchHead'=>array('match_id'=>$this->Match->id,'src'=>$this->data['Match']['src']));
				$this->MatchHead->save($phd);
			$this->redirect(array('action'=>'index'));
				;
				
				
				
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Match->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid match', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Match->save($this->data)) {
				$this->Session->setFlash(__('The match has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Match->read(null, $id);
		}
		$users = $this->Match->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for match', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Match->delete($id)) {
			$this->Session->setFlash(__('Match deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Match was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

   function home($id=null)
{
$this->layout='lecture';
  if($id!=null)
  {
    $result=$this->Match->find('first',array('conditions'=>array('Match.id'=>$id)));
  }
  else $result=$this->Match->find('first');

		$this->Match->recursive = 0;
		$this->set('matches', $this->paginate());
		$this->set('result',$result);
		
}   
function getcount()
{
return $this->Match->find('count');
}	
function getmatches($id=null)
{
if($id!=null)
{
return $this->Match->find('all',array('conditions'=>array('Match.user_id'=>$id)));
}
}
function getrecent()
{
return $this->Match->find("all",array('order'=>array('Match.created DESC'),'limit'=>5));
	 
}
function matchpeople()
{


}
}
