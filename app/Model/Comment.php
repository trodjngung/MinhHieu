<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class Comment extends AppModel {
	var $name = 'Comment';
	var $belongsTo = array('Post'=>array('className'=>'Post'));
}