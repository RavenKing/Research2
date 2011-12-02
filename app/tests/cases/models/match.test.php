<?php
/* Match Test cases generated on: 2011-11-21 15:01:11 : 1321887671*/
App::import('Model', 'Match');

class MatchTestCase extends CakeTestCase {
	var $fixtures = array('app.match', 'app.user', 'app.match_tech', 'app.technique');

	function startTest() {
		$this->Match =& ClassRegistry::init('Match');
	}

	function endTest() {
		unset($this->Match);
		ClassRegistry::flush();
	}

}
