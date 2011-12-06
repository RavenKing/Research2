<?php
/* Progress Test cases generated on: 2011-11-21 15:01:16 : 1321887676*/
App::import('Model', 'Progress');

class ProgressTestCase extends CakeTestCase {
	var $fixtures = array('app.progress', 'app.project');

	function startTest() {
		$this->Progress =& ClassRegistry::init('Progress');
	}

	function endTest() {
		unset($this->Progress);
		ClassRegistry::flush();
	}

}
