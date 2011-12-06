<?php
/* ProjectTech Fixture generated on: 2011-11-21 15:01:50 : 1321887710 */
class ProjectTechFixture extends CakeTestFixture {
	var $name = 'ProjectTech';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'technique_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk1' => array('column' => 'project_id', 'unique' => 1), 'fk2' => array('column' => 'technique_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'project_id' => 1,
			'technique_id' => 1
		),
	);
}
