<?php defined('SYSPATH') OR die('No direct script access.');

abstract class Controller extends Kohana_Controller {
    
    public $session;
    public $content = '';
    public $user = array();
    public $rank = array();
    
    public function before() {
        parent::before();
        
        $this->session = Session::instance();       
        $userLoggedIn = $this->session->get('logged', false);
        if($userLoggedIn == false && ($this->request->action() != 'index' || $this->request->controller() != 'Index') ){
            header('Location: /kohana/');
            exit;
        }

        
        $mu = new Model_Uzytkownicy;
        $mr = new Model_Rank();
        $this->user = $mu->getUserById($userLoggedIn);
        $user = $mu->getUserById($userLoggedIn);
        $this->rank = $mr->getRankInfo($user);
        
    }

        public function after() {
        parent::after();
        $mainView = View::factory('main');
        $mainView->content = (string)$this->content;
        $mainView->user = $this->user;  
        $mainView->rank = $this->rank;
        $this->response->body($mainView);
        
    }
    
}
