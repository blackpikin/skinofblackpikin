<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Halsey Takang
 */
App::uses('AppModel', 'Model');
class User extends AppModel{
    public $name = 'User';
    public $belongsTo = array('Group' => array('className' => 'Group', 'foreignKey' => 'group_id'));
}
