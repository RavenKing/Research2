<?php
/* Places Test cases generated on: 2011-11-23 03:13:20 : 1322018000*/
App::import('Controller', 'Places');

class TestPlacesController extends PlacesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PlacesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.place');

	function startTest() {
		$this->Places =& new TestPlacesController();
		$this->Places->constructClasses();
	}

	function endTest() {
		unset($this->Places);
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
