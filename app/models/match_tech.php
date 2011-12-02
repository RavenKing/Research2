<?php
class MatchTech extends AppModel {
	var $name = 'MatchTech';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Match' => array(
			'className' => 'Match',
			'foreignKey' => 'match_id',
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
