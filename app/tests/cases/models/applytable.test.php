<?php
/* Applytable Test cases generated on: 2011-11-29 10:11:00 : 1322561460*/
App::import('Model', 'Applytable');

class ApplytableTestCase extends CakeTestCase {
	var $fixtures = array('app.applytable', 'app.match', 'app.user', 'app.group', 'app.project', 'app.teacher', 'app.faculty', 'app.direction', 'app.progress', 'app.project_tech', 'app.technique', 'app.match_tech');

	function startTest() {
		$this->Applytable =& ClassRegistry::init('Applytable');
	}

	function endTest() {
		unset($this->Applytable);
		ClassRegistry::flush();
	}

}
