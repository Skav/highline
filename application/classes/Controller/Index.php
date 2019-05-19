<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {
    


    public function action_index() {

            
        $login = $this->request->post('login');
        $pass = $this->request->post('pass');        
    

        $view = View::factory('logowanie');
         $this->content = $view->render();      
         
       if($login != NULL){
        $mu = new Model_Uzytkownicy();
        $login_result = $mu->checkUser($login, $pass);
        $this->session->set('logged', $login_result['id']);
        if($login_result != false) {            
            if($login_result['ranga'] == 'Szef'){
                header('Location: admin/admin');
            }else{
              header('Location: index/dane'); 
           }
           exit;
        }
        }

        $userLoggedIn = $this->session->get('logged', false);
        if ($userLoggedIn != false){
            header('Location: index/dane');
            exit;
        }
        




    }

    	public function action_test() {
            
        }
        //Podstawowe dane uzytkownika
        public function action_dane() {
            
             
            $view = View::factory('dane');
            $view->user = $this->user;
            $this->content = $view->render();  
            
            
            
    }
    //Informacje o trasie itp
     public function action_panel() {
            
            $data["fkasa"] = (int)$this->request->post('kasa') - (int)$this->request->post('naprawa');
 //         $data["gkasa"] = (int)$this->request->post('km')*4  - $this->request->post('tuning');
                
            
            $data["start"] = (string)$this->request->post('start');
            $data["koniec"] = (string)$this->request->post('koniec');
            $data["kasa"] = (int)$this->request->post('kasa');
            $data["km"] = (string)$this->request->post('km');
            $data["litry"] = (string)$this->request->post('litry');
            $data["ciezar"] = (string)$this->request->post('ciezar');
            $data["godz"] = (string)$this->request->post('godz');
            $data["kursy"] = (int)$this->request->post('kursy') + 1;
            $data["typ"] = (int)$this->request->post('typ') + 1;
//            $data["npass"] = 0;
//          (string)$this->request->post('npass');
//          $data["naprawa"] = (int)$this->request->post('naprawa');
//          $data['tuning'] = (int)$this->request->post('tuning');
            
            $validationResult = $this->validate($data);
            
             $userLoggedIn = $this->session->get('logged', false);            
             $mp = new Model_Przejazdy();
            if($this->request->post("Zapisz")!=NULL && $validationResult){
                $x = $mp->addRowK($userLoggedIn, $data);
            //    var_dump($x);
            }
             
            $view = View::factory('panel');
            $view->user = $this->user;
            $this->content = $view->render(); 
            
            
            
    }
    //Wylogowywanie
    public function action_logout() {
        $this->session->set('logged', false);
                   header('Location: /kohana/');
            exit;
        }        
    //Informacje o ciezarówce    
    public function action_tir() {
            $mu = new Model_Uzytkownicy();
            $userLoggedIn = $this->session->get('logged', false);
             
            $view = View::factory('tir');
            $view->user = $this->user;
            $this->content = $view->render(); 
            
            
            
    }
    //walidacja
    private function validate($data){
        foreach ($data as $field) {                                                                                                                     
            if(empty(trim($field))){
                return false;
            }
        }
        return true;
    }
   
    //kosz napraw 
    public function action_naprawa() {
            
            $data["fkasa"] = (int)$this->request->post('kasa') - (int)$this->request->post('naprawa');
            $data["gkasa"] = (int)$this->request->post('km')*4  - $this->request->post('tuning');
                
            $data["kasa"] = (int)$this->request->post('kasa');
            $data["km"] = (string)$this->request->post('km');
            $data["litry"] = (string)$this->request->post('litry');
            $data["ciezar"] = (string)$this->request->post('ciezar');
            $data["godz"] = (string)$this->request->post('godz');
            $data["naprawa"] = (int)$this->request->post('naprawa');
            $data['tuning'] = (int)$this->request->post('tuning');
       
            $userLoggedIn = $this->session->get('logged', false);
            $mu = new Model_Uzytkownicy();
            #$mf = new Model_Firma();
            if($this->request->post("Zapisz")!=NULL ){
                $x = $mu->saveRow($userLoggedIn, $data);
                var_dump($x);
            }
            
             
            $view = View::factory('naprawa');
            $view->user = $this->user;
            $this->content = $view->render(); 
            
        }  
        //Zmiana hasla
    public function action_zmien() {

            
            $data["npass"] = (string)$this->request->post('npass');
            
           # $validationResult = $this->validate($data);
            $userLoggedIn = $this->session->get('logged', false);
            $mu = new Model_Uzytkownicy();
            #$mf = new Model_Firma();
            
            if($this->request->post("Zapisz")!=NULL){
                
                $x = $mu->updatePass($userLoggedIn, $data);
                var_dump($x);
            }
             
            $view = View::factory('zmien');
           
            $view->user = $this->user;
            $this->content = $view->render(); 

    } 
            
    public function action_wysli() {

            
            $data["nick"] = (string)$this->request->post('nick');
            $data["head"] = (string)$this->request->post('head');
            $data["text"] = (string)$this->request->post('text');
            $data["send_user"]= (string)$this->request->post('send_user');
            
           # $validationResult = $this->validate($data);
            $userLoggedIn = $this->session->get('logged', false);
            $mu = new Model_Uzytkownicy();
            $mw = new Model_Wiadomosci();
            
            if($this->request->post("wysli")!=NULL){
                
                
                
                $x = $mw->sendMessange($data);
                var_dump($x);
            }
             
            $view = View::factory('wysli');
           
            $view->user = $this->user;
            $view->list = $mu->getList();
            $this->content = $view->render(); 

    } 
    
    public function action_odbierz() {

            $userLoggedIn = $this->session->get('logged', false);
            $mu = new Model_Uzytkownicy();
            $mw = new Model_Wiadomosci();
            $user = $mu->getUserById($userLoggedIn);
            $data["id"] = (string)$this->request->post('id');
            $data ['del'] = 'del';
            $data ['acc'] = 'yes';
          
            if($this->request->post("acc")!=NULL){
                $y = $mw->saveRowMessange($data);
               # var_dump($y);
            }
            
             if($this->request->post("del")!=NULL){
                $y = $mw->delRowMessange($data);
               # var_dump($y);
            }
             $view = View::factory('odbierz');          
            $view->list = $mw->takeMessangeByNick($user);
            $view->user = $this->user;
            $this->content = $view->render(); 

    } 
    
    public function action_odebrane() {

            $userLoggedIn = $this->session->get('logged', false);
            $mu = new Model_Uzytkownicy();
            $mw = new Model_Wiadomosci();
            $user = $mu->getUserById($userLoggedIn);
            $data["id"] = (string)$this->request->post('id');
            $data ['del'] = 'del';
            
            if($this->request->post("del")!=NULL){
                $y = $mw->delRowMessange($data);
               # var_dump($y);
            }
                       
            $view = View::factory('odebrane');          
            $view->list = $mw->takeAcceptMessange($user);
            $view->user = $this->user;
            $this->content = $view->render(); 

    } 
    
} // End Welcome
