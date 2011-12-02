<?php
/* MatchTeches Test cases generated on: 2011-11-25 14:58:13 : 1322233093*/
App::import('Controller', 'MatchTeches');

class TestMatchTechesController extends MatchTechesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MatchTechesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.match_tech', 'app.match', 'app.user', 'app.group', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique');

	function startTest() {
		$this->MatchTeches =& new TestMatchTechesController();
		$this->MatchTeches->constructClasses();
	}

	function endTest() {
		unset($this->MatchTeches);
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
