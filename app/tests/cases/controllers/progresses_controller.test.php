<?php
/* Progresses Test cases generated on: 2011-11-21 15:01:40 : 1321887700*/
App::import('Controller', 'Progresses');

class TestProgressesController extends ProgressesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProgressesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.progress', 'app.project');

	function startTest() {
		$this->Progresses =& new TestProgressesController();
		$this->Progresses->constructClasses();
	}

	function endTest() {
		unset($this->Progresses);
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
