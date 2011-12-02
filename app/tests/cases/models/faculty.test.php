<?php
/* Faculty Test cases generated on: 2011-11-21 15:00:52 : 1321887652*/
App::import('Model', 'Faculty');

class FacultyTestCase extends CakeTestCase {
	var $fixtures = array('app.faculty', 'app.teacher');

	function startTest() {
		$this->Faculty =& ClassRegistry::init('Faculty');
	}

	function endTest() {
		unset($this->Faculty);
		ClassRegistry::flush();
	}

}
