<?php
/* MatchTech Test cases generated on: 2011-11-21 15:01:03 : 1321887663*/
App::import('Model', 'MatchTech');

class MatchTechTestCase extends CakeTestCase {
	var $fixtures = array('app.match_tech', 'app.match', 'app.technique');

	function startTest() {
		$this->MatchTech =& ClassRegistry::init('MatchTech');
	}

	function endTest() {
		unset($this->MatchTech);
		ClassRegistry::flush();
	}

}
