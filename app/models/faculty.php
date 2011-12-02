<?php
class Faculty extends AppModel {
	var $name = 'Faculty';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Teacher' => array(
			'className' => 'Teacher',
			'foreignKey' => 'faculty_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
