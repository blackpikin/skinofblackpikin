<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TutorialsController
 * The controller for tutorials page
 * @author Halsey Takang
 */

App::uses('AppController', 'Controller');
class TutorialsController extends AppController {
    public $uses = array('TutorialCategory', 'Tutorial');
            
    function beforeFilter(){
        parent::beforeFilter();
    }
    
    function index(){
    $sqlTuts = $this->TutorialCategory->find('all');
    foreach ($sqlTuts as $tutCat){
        $arrContent[$tutCat['TutorialCategory']['name']] = explode(',', $tutCat['TutorialCategory']['tutorials']);
    }
    $this->set('tutorials', $arrContent);
    }
    
    function showTutorials($name){
        $sqldata = $this->Tutorial->find('all', array('conditions' => array('Tutorial.title' => $name)));
        $this->set('items', $sqldata);
    }
    
}
