<?php
class User extends AppModel {
	//var $name = 'User';
	    var $name = 'User';
   // var $belongsTo = array('Group');
    var $actsAs = array('Acl' => array('type' => 'requester'));
    function parentNode() {
    if (!$this->id && empty($this->data)) {
    return null;
    }
    if (isset($this->data['User']['group_id'])) {
    $groupId = $this->data['User']['group_id'];
    } else {
    $groupId = $this->field('group_id');
    }
    if (!$groupId) {
    return null;
    } else {
    return array('Group' => array('id' => $groupId));
    }
    }

	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Match' => array(
			'className' => 'Match',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'user_id',
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
