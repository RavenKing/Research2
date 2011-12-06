<?php
/* Project Fixture generated on: 2011-11-21 15:01:56 : 1321887716 */
class ProjectFixture extends CakeTestFixture {
	var $name = 'Project';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'teacher_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'direction_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'progress_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'isjoinable' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'starttime' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'endtime' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk1' => array('column' => 'teacher_id', 'unique' => 0), 'fk2' => array('column' => 'progress_id', 'unique' => 0), 'fk3' => array('column' => 'direction_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'teacher_id' => 1,
			'direction_id' => 1,
			'progress_id' => 1,
			'isjoinable' => 1,
			'created' => '2011-11-21 15:01:56',
			'modified' => '2011-11-21 15:01:56',
			'starttime' => '2011-11-21 15:01:56',
			'endtime' => '2011-11-21 15:01:56',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
