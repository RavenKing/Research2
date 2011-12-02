<?php
/* MatchHead Test cases generated on: 2011-11-25 14:59:38 : 1322233178*/
App::import('Model', 'MatchHead');

class MatchHeadTestCase extends CakeTestCase {
	var $fixtures = array('app.match_head', 'app.match', 'app.user', 'app.group', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique', 'app.match_tech');

	function startTest() {
		$this->MatchHead =& ClassRegistry::init('MatchHead');
	}

	function endTest() {
		unset($this->MatchHead);
		ClassRegistry::flush();
	}

}
