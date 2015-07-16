<?php
/**
 * Description of HomeController
 *
 * @author Halsey Takang
 */

App::uses('AppController', 'Controller');
class HomeController extends AppController {
    public $uses = array('Home');
    
    function beforeFilter(){
        parent::beforeFilter();
    }
    
    function index(){
        $sqlitems = $this->Home->find('all');
        $this->set('topics', $sqlitems);
    }
    
    function readArticle($article_id){
        $sqlitems = $this->Home->findByidhome($article_id);
        $this->set('topics', $sqlitems);
    }
}
