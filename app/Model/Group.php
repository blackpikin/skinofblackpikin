<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Group
 *
 * @author Halsey Takang
 */
App:uses('AppModel', 'Model');
class Group extends AppModel {
    public $name= 'Group';
    public $hasMany = 'User';
    public $primaryKey = 'id';
}
