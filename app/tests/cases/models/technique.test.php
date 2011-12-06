<?php
/* Technique Test cases generated on: 2011-11-21 15:02:11 : 1321887731*/
App::import('Model', 'Technique');

class TechniqueTestCase extends CakeTestCase {
	var $fixtures = array('app.technique', 'app.match_tech', 'app.match', 'app.user', 'app.project_tech', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress');

	function startTest() {
		$this->Technique =& ClassRegistry::init('Technique');
	}

	function endTest() {
		unset($this->Technique);
		ClassRegistry::flush();
	}

}
