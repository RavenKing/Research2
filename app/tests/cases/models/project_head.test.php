<?php
/* ProjectHead Test cases generated on: 2011-11-25 14:58:03 : 1322233083*/
App::import('Model', 'ProjectHead');

class ProjectHeadTestCase extends CakeTestCase {
	var $fixtures = array('app.project_head', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique', 'app.match_tech', 'app.match', 'app.user', 'app.group');

	function startTest() {
		$this->ProjectHead =& ClassRegistry::init('ProjectHead');
	}

	function endTest() {
		unset($this->ProjectHead);
		ClassRegistry::flush();
	}

}
