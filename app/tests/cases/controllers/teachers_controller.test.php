<?php
/* Teachers Test cases generated on: 2011-11-21 15:02:01 : 1321887721*/
App::import('Controller', 'Teachers');

class TestTeachersController extends TeachersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TeachersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher', 'app.faculty', 'app.project', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique');

	function startTest() {
		$this->Teachers =& new TestTeachersController();
		$this->Teachers->constructClasses();
	}

	function endTest() {
		unset($this->Teachers);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
