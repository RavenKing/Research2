<?php
/* Projects Test cases generated on: 2011-11-21 15:01:56 : 1321887716*/
App::import('Controller', 'Projects');

class TestProjectsController extends ProjectsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProjectsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.project', 'app.teacher', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique');

	function startTest() {
		$this->Projects =& new TestProjectsController();
		$this->Projects->constructClasses();
	}

	function endTest() {
		unset($this->Projects);
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
