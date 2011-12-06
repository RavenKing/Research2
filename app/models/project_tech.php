<?php
class ProjectTech extends AppModel {
	var $name = 'ProjectTech';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Technique' => array(
			'className' => 'Technique',
			'foreignKey' => 'technique_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
