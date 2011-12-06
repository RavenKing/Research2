<?php
/* MatchHead Fixture generated on: 2011-11-25 14:59:38 : 1322233178 */
class MatchHeadFixture extends CakeTestFixture {
	var $name = 'MatchHead';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'match_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'src' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'mafk1' => array('column' => 'match_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'match_id' => 1,
			'src' => 'Lorem ipsum dolor sit amet'
		),
	);
}
