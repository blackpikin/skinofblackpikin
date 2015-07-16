<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AboutsController
 *
 * @author Halsey Takang
 */
App::uses('AppController', 'Controller');
class AboutsController extends AppController{
    function beforeFilter(){
        parent::beforeFilter();
    }
    
    function index(){
        $this->set('about', $this->About->find('all'));
    }
}
