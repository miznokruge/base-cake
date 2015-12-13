<?php
App::uses('AppModel', 'Model');
/**
 * QuestionOrder Model
 *
 * @property Set $Set
 */
class QuestionOrder extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Set' => array(
			'className' => 'Set',
			'foreignKey' => 'question_order_id',
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
