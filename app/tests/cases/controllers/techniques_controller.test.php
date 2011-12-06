<?php
/* Techniques Test cases generated on: 2011-11-21 15:02:12 : 1321887732*/
App::import('Controller', 'Techniques');

class TestTechniquesController extends TechniquesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TechniquesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.technique', 'app.match_tech', 'app.match', 'app.user', 'app.project_tech', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress');

	function startTest() {
		$this->Techniques =& new TestTechniquesController();
		$this->Techniques->constructClasses();
	}

	function endTest() {
		unset($this->Techniques);
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
