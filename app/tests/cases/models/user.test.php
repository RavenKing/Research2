<?php
/* User Test cases generated on: 2011-11-21 15:02:25 : 1321887745*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.group', 'app.match', 'app.match_tech', 'app.technique', 'app.project_tech', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
