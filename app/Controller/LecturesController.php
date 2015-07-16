<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LecturesController
 *
 * @author Halsey Takang
 */

App::uses('AppController', 'Controller');
class LecturesController extends AppController {
    public $uses = array('Lecture', 'LectureCategory');
    
    function beforeFilter(){
        parent::beforeFilter();
    }
    
    function index(){
    $sqlTuts = $this->LectureCategory->find('all');
    foreach ($sqlTuts as $tutCat){
        $arrContent[$tutCat['LectureCategory']['name']] = explode(',', $tutCat['LectureCategory']['lectures']);
    }
    $this->set('lectures', $arrContent);
    }
    
    function showLectures($name){
        $sqldata = $this->Lecture->find('all', array('conditions' => array('Lecture.title' => $name)));
        $this->set('items', $sqldata);
    }
}
