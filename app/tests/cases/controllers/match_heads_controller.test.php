<?php
/* MatchHeads Test cases generated on: 2011-11-25 14:59:40 : 1322233180*/
App::import('Controller', 'MatchHeads');

class TestMatchHeadsController extends MatchHeadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MatchHeadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.match_head', 'app.match', 'app.user', 'app.group', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique', 'app.match_tech');

	function startTest() {
		$this->MatchHeads =& new TestMatchHeadsController();
		$this->MatchHeads->constructClasses();
	}

	function endTest() {
		unset($this->MatchHeads);
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
