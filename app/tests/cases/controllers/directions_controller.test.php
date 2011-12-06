<?php
/* Directions Test cases generated on: 2011-11-21 15:00:46 : 1321887646*/
App::import('Controller', 'Directions');

class TestDirectionsController extends DirectionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DirectionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.direction', 'app.project');

	function startTest() {
		$this->Directions =& new TestDirectionsController();
		$this->Directions->constructClasses();
	}

	function endTest() {
		unset($this->Directions);
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
