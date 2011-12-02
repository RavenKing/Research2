<?php
/* Lectures Test cases generated on: 2011-11-22 13:33:42 : 1321968822*/
App::import('Controller', 'Lectures');

class TestLecturesController extends LecturesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LecturesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.lecture');

	function startTest() {
		$this->Lectures =& new TestLecturesController();
		$this->Lectures->constructClasses();
	}

	function endTest() {
		unset($this->Lectures);
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
