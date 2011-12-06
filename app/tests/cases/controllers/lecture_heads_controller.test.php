<?php
/* LectureHeads Test cases generated on: 2011-11-25 14:57:54 : 1322233074*/
App::import('Controller', 'LectureHeads');

class TestLectureHeadsController extends LectureHeadsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LectureHeadsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.lecture_head', 'app.lecture');

	function startTest() {
		$this->LectureHeads =& new TestLectureHeadsController();
		$this->LectureHeads->constructClasses();
	}

	function endTest() {
		unset($this->LectureHeads);
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
