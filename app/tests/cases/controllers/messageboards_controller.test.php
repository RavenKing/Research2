<?php
/* Messageboards Test cases generated on: 2011-12-01 07:00:45 : 1322722845*/
App::import('Controller', 'Messageboards');

class TestMessageboardsController extends MessageboardsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MessageboardsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.messageboard');

	function startTest() {
		$this->Messageboards =& new TestMessageboardsController();
		$this->Messageboards->constructClasses();
	}

	function endTest() {
		unset($this->Messageboards);
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
