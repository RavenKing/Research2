<?php
/* TeacherHead Test cases generated on: 2011-12-01 13:14:06 : 1322745246*/
App::import('Model', 'TeacherHead');

class TeacherHeadTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher_head', 'app.teacher', 'app.faculty', 'app.project', 'app.direction', 'app.progress', 'app.xi', 'app.project_tech', 'app.technique', 'app.match_tech', 'app.match', 'app.user', 'app.group');

	function startTest() {
		$this->TeacherHead =& ClassRegistry::init('TeacherHead');
	}

	function endTest() {
		unset($this->TeacherHead);
		ClassRegistry::flush();
	}

}
