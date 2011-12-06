<?php
/* Project Test cases generated on: 2011-11-21 15:01:56 : 1321887716*/
App::import('Model', 'Project');

class ProjectTestCase extends CakeTestCase {
	var $fixtures = array('app.project', 'app.teacher', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique');

	function startTest() {
		$this->Project =& ClassRegistry::init('Project');
	}

	function endTest() {
		unset($this->Project);
		ClassRegistry::flush();
	}

}
