<?php
/* Xis Test cases generated on: 2011-11-30 13:06:34 : 1322658394*/
App::import('Controller', 'Xis');

class TestXisController extends XisController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class XisControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.xi', 'app.faculty', 'app.teacher', 'app.project', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique', 'app.match_tech', 'app.match', 'app.user', 'app.group');

	function startTest() {
		$this->Xis =& new TestXisController();
		$this->Xis->constructClasses();
	}

	function endTest() {
		unset($this->Xis);
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
