<?php
/* Applytables Test cases generated on: 2011-11-29 10:11:01 : 1322561461*/
App::import('Controller', 'Applytables');

class TestApplytablesController extends ApplytablesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ApplytablesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.applytable', 'app.match', 'app.user', 'app.group', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique', 'app.match_tech');

	function startTest() {
		$this->Applytables =& new TestApplytablesController();
		$this->Applytables->constructClasses();
	}

	function endTest() {
		unset($this->Applytables);
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
