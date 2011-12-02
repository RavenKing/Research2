<?php
/* Teacher Test cases generated on: 2011-11-21 15:02:00 : 1321887720*/
App::import('Model', 'Teacher');

class TeacherTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher', 'app.faculty', 'app.project', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique');

	function startTest() {
		$this->Teacher =& ClassRegistry::init('Teacher');
	}

	function endTest() {
		unset($this->Teacher);
		ClassRegistry::flush();
	}

}
