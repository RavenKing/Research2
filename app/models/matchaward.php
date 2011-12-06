<?php
class Matchaward extends AppModel {
	var $name = 'Matchaward';
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
            'dir' => 'files/awards',
            'create_directory' => true,
            'allowed_mime' => array('application/x-zip-compressed'),
            'allowed_ext' => array('.zip'),'thumbsizes' => array(
          'normal' => array('width'=>200, 'height'=>200),
        ),
		
		'default'=>'default.jpg',
		)
    )
); 
}
