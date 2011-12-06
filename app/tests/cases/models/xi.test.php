<?php
/* Xi Test cases generated on: 2011-11-30 13:06:32 : 1322658392*/
App::import('Model', 'Xi');

class XiTestCase extends CakeTestCase {
	var $fixtures = array('app.xi', 'app.faculty', 'app.teacher', 'app.project', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique', 'app.match_tech', 'app.match', 'app.user', 'app.group');

	function startTest() {
		$this->Xi =& ClassRegistry::init('Xi');
	}

	function endTest() {
		unset($this->Xi);
		ClassRegistry::flush();
	}

}
