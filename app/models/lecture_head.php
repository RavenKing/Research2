<?php
class LectureHead extends AppModel {
	var $name = 'LectureHead';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Lecture' => array(
			'className' => 'Lecture',
			'foreignKey' => 'lecture_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
var $actsAs = array (
	// models/behaviors/meio_upload.php
    'MeioUpload' => array (
        'src' => array (
            'dir' => 'img/images',
            'create_directory' => true,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/gif', 'image/png'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png', '.gif'),'thumbsizes' => array(
          'normal' => array('width'=>200, 'height'=>200),
        ),
		
		'default'=>'default.jpg',
		)
    )
); 
	
	}
