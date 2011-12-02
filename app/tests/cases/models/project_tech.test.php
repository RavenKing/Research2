<?php
/* ProjectTech Test cases generated on: 2011-11-21 15:01:50 : 1321887710*/
App::import('Model', 'ProjectTech');

class ProjectTechTestCase extends CakeTestCase {
	var $fixtures = array('app.project_tech', 'app.project', 'app.technique');

	function startTest() {
		$this->ProjectTech =& ClassRegistry::init('ProjectTech');
	}

	function endTest() {
		unset($this->ProjectTech);
		ClassRegistry::flush();
	}

}
