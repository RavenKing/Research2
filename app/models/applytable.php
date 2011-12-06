<?php
class Applytable extends AppModel {
	var $name = 'Applytable';
	var $validate = array(
		'match_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'Match' => array(
			'className' => 'Match',
			'foreignKey' => 'match_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $actsAs = array (
	// models/behaviors/meio_upload.php
    'MeioUpload' => array (
        'src' => array (
            'dir' => 'files/apply',
            'create_directory' => true,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/gif', 'image/png','application/pdf','application/msword'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png', '.gif','.pdf','.doc'),'thumbsizes' => array(
          'normal' => array('width'=>200, 'height'=>200),
        ),
		
		'default'=>'default.jpg',
		)
    )
); 
}
