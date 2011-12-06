<?php
/* TeacherHeads Test cases generated on: 2011-12-01 13:14:07 : 1322745247*/
App::import('Controller', 'TeacherHeads');

class TestTeacherHeadsController extends TeacherHeadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TeacherHeadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher_head', 'app.teacher', 'app.faculty', 'app.project', 'app.direction', 'app.progress', 'app.xi', 'app.project_tech', 'app.technique', 'app.match_tech', 'app.match', 'app.user', 'app.group');

	function startTest() {
		$this->TeacherHeads =& new TestTeacherHeadsController();
		$this->TeacherHeads->constructClasses();
	}

	function endTest() {
		unset($this->TeacherHeads);
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
