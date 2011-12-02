<?php
/* Place Test cases generated on: 2011-11-23 03:13:19 : 1322017999*/
App::import('Model', 'Place');

class PlaceTestCase extends CakeTestCase {
	var $fixtures = array('app.place');

	function startTest() {
		$this->Place =& ClassRegistry::init('Place');
	}

	function endTest() {
		unset($this->Place);
		ClassRegistry::flush();
	}

}
