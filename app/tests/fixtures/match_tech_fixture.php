<?php
/* MatchTech Fixture generated on: 2011-11-21 15:01:03 : 1321887663 */
class MatchTechFixture extends CakeTestFixture {
	var $name = 'MatchTech';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'match_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'technique_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk1' => array('column' => 'match_id', 'unique' => 1), 'fk2' => array('column' => 'technique_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'match_id' => 1,
			'technique_id' => 1
		),
	);
}
