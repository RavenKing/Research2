<?php
/* Direction Test cases generated on: 2011-11-21 15:00:46 : 1321887646*/
App::import('Model', 'Direction');

class DirectionTestCase extends CakeTestCase {
	var $fixtures = array('app.direction', 'app.project');

	function startTest() {
		$this->Direction =& ClassRegistry::init('Direction');
	}

	function endTest() {
		unset($this->Direction);
		ClassRegistry::flush();
	}

}
