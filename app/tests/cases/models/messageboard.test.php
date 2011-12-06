<?php
/* Messageboard Test cases generated on: 2011-12-01 07:00:43 : 1322722843*/
App::import('Model', 'Messageboard');

class MessageboardTestCase extends CakeTestCase {
	var $fixtures = array('app.messageboard');

	function startTest() {
		$this->Messageboard =& ClassRegistry::init('Messageboard');
	}

	function endTest() {
		unset($this->Messageboard);
		ClassRegistry::flush();
	}

}
