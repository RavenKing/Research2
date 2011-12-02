<?php
/* Matches Test cases generated on: 2011-11-21 15:01:11 : 1321887671*/
App::import('Controller', 'Matches');

class TestMatchesController extends MatchesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MatchesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.match', 'app.user', 'app.match_tech', 'app.technique');

	function startTest() {
		$this->Matches =& new TestMatchesController();
		$this->Matches->constructClasses();
	}

	function endTest() {
		unset($this->Matches);
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
