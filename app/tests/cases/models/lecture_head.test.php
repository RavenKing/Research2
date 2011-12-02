<?php
/* LectureHead Test cases generated on: 2011-11-25 14:57:54 : 1322233074*/
App::import('Model', 'LectureHead');

class LectureHeadTestCase extends CakeTestCase {
	var $fixtures = array('app.lecture_head', 'app.lecture');

	function startTest() {
		$this->LectureHead =& ClassRegistry::init('LectureHead');
	}

	function endTest() {
		unset($this->LectureHead);
		ClassRegistry::flush();
	}

}
