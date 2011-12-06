<?php
    class AppController extends Controller {
    var $components = array('Acl', 'Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session','Ajax','Javascript');
    function beforeFilter() {
    //Configure AuthComponent
      $this->Auth->fields = array(
                    'username' => 'name',
                    'password' => 'password'
                );
	$this->Auth->authorize = 'actions';
    $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
    $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'logout');
    $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'homepage');
	    $this->Auth->actionPath = 'controllers/';
    $this->Auth->allow(array('*'));	
	$lan=$this->Session->read('language');
	if($lan!=null)
 Configure::write('Config.language',$lan);
    }
    }
    
    ?>
