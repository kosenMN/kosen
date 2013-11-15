<?php
App::uses('AppModel', 'Model');
/**
 * Kakomon Model
 *
 * @property User $User
 */
class Kakomon extends AppModel {

	public $actsAs = array(
	'Uploader.Attachment' => array(
		// Do not copy all these settings, it's merely an example
		'file' => array(
			'nameCallback' => 'formatName',
			'append' => '',
			'prepend' => '',
			'tempDir' => TMP,
			'uploadDir' => '',
			'transportDir' => '',
			'finalPath' => '',
			'dbColumn' => 'dir',
			'metaColumns' => array(
				'basename'=>'name'
			),
			'defaultPath' => '',
			'overwrite' => false,
			'stopSave' => true,
			'allowEmpty' => true,
			'transforms' => array(),
			'transport' => array(),
			'curl' => array()
		)
	)
	);
	
	public function formatName($name, $file) {
	
		//return sprintf('%s-%s', $name, $file->size());
		return $name;
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
}
