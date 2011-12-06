<?php
/* Lecture Test cases generated on: 2011-11-22 13:33:42 : 1321968822*/
App::import('Model', 'Lecture');

class LectureTestCase extends CakeTestCase {
	var $fixtures = array('app.lecture');

	function startTest() {
		$this->Lecture =& ClassRegistry::init('Lecture');
	}

	function endTest() {
		unset($this->Lecture);
		ClassRegistry::flush();
	}

}
