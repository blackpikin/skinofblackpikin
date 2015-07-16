<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactsController
 *
 * @author Halsey Takang
 */
App::uses("AppController", 'Controller');
class ContactsController extends AppController {
    function beforeFilter(){
        parent::beforeFilter();
    }
    
    function index(){}
}
