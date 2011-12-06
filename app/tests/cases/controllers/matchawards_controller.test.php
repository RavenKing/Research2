<?php
/* Matchawards Test cases generated on: 2011-12-04 05:55:00 : 1322978100*/
App::import('Controller', 'Matchawards');

class TestMatchawardsController extends MatchawardsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MatchawardsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.matchaward', 'app.match', 'app.user', 'app.group', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress', 'app.xi', 'app.project_tech', 'app.technique', 'app.match_tech');

	function startTest() {
		$this->Matchawards =& new TestMatchawardsController();
		$this->Matchawards->constructClasses();
	}

	function endTest() {
		unset($this->Matchawards);
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
