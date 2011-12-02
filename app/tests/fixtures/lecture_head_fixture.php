<?php
/* LectureHead Fixture generated on: 2011-11-25 14:57:54 : 1322233074 */
class LectureHeadFixture extends CakeTestFixture {
	var $name = 'LectureHead';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'lecture_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'src' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk1' => array('column' => 'lecture_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'lecture_id' => 1,
			'src' => 'Lorem ipsum dolor sit amet'
		),
	);
}
