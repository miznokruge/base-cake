<?php
App::uses('AppModel', 'Model');

/**
 * User Model
 *
 * @property Group $Group
 */
class User extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'username';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'username' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'password' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
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
        'email' => array(
            'email' => array(
                'rule' => array('email'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'active' => array(
            'boolean' => array(
                'rule' => array('boolean'),
            //'message' => 'Your custom message here',
//'allowEmpty' => false,
//'required' => false,
//'last' => false, // Stop validation after this rule
//'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

//The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Membership' => array(
            'className' => 'Membership',
            'foreignKey' => 'membership_id'
        ),
        'UserGroup' => array(
            'className' => 'UserGroup',
            'foreignKey' => 'user_group_id'
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

}
