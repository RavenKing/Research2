<?php
class ProjectHead extends AppModel {
	var $name = 'ProjectHead';
	var $validate = array(
	
	'src' => array('Empty' => array('check' => false)),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
var $actsAs = array(
    'MeioUpload' => array(
        'src' => array(
            'dir' => 'img{DS}images',
            'create_directory' => true,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
            'max_size' => '4 Mb',
			'thumbsizes' => array(
                'normal' => array('width'=>200, 'height'=>200),
            ),
            'default' => 'default.jpg',
        )
    )
);

	}
