<?php
/* Matchaward Test cases generated on: 2011-12-04 05:54:59 : 1322978099*/
App::import('Model', 'Matchaward');

class MatchawardTestCase extends CakeTestCase {
	var $fixtures = array('app.matchaward', 'app.match', 'app.user', 'app.group', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress', 'app.xi', 'app.project_tech', 'app.technique', 'app.match_tech');

	function startTest() {
		$this->Matchaward =& ClassRegistry::init('Matchaward');
	}

	function endTest() {
		unset($this->Matchaward);
		ClassRegistry::flush();
	}

}
