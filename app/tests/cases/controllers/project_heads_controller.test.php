<?php
/* ProjectHeads Test cases generated on: 2011-11-25 14:58:04 : 1322233084*/
App::import('Controller', 'ProjectHeads');

class TestProjectHeadsController extends ProjectHeadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProjectHeadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.project_head', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique', 'app.match_tech', 'app.match', 'app.user', 'app.group');

	function startTest() {
		$this->ProjectHeads =& new TestProjectHeadsController();
		$this->ProjectHeads->constructClasses();
	}

	function endTest() {
		unset($this->ProjectHeads);
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
