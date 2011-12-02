<?php
/* ProjectTeches Test cases generated on: 2011-11-21 15:01:51 : 1321887711*/
App::import('Controller', 'ProjectTeches');

class TestProjectTechesController extends ProjectTechesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProjectTechesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.project_tech', 'app.project', 'app.technique');

	function startTest() {
		$this->ProjectTeches =& new TestProjectTechesController();
		$this->ProjectTeches->constructClasses();
	}

	function endTest() {
		unset($this->ProjectTeches);
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
