<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Author
 *
 * @author Halsey Takang
 */
App::uses('AppModel', 'Model');
class Author extends AppModel{
    public $name = 'Author';
    public $hasMany = 'Tutorial';
    public $primaryKey = 'id';
    public $belongsTo = array('Group' => array('className' => 'Group', 'foreignKey' => 'group_id'));
}
