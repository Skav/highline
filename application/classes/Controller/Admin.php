<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller {
    
    
     //walidacja
    private function validate($data){
        foreach ($data as $field) {                                                                                                                     
            if(empty(trim($field))){
                return false;
            }
        }
        return true;
    }
         //Wylogowywanie
    public function action_logout() {
        $this->session->set('logged', false);
                   header('Location: /kohana/');
            exit;
        }        

	//admin: panel
    public function action_admin() {
            
            $userLoggedIn = $this->session->get('logged', false);
            
            $mr = new Model_Rank();
             
            $view = View::factory('admin');
            $mu = new Model_Uzytkownicy;
            $mp = new Model_Przejazdy();
            
            $user = $mu->getUserById($userLoggedIn);
            $view->user = $mu->getUserById($userLoggedIn);
            $view->list = $mu->getList();
            $view->rank = $mr->getRankInfo($user);
            $view->user = $this->user;
            $this->content = $view->render(); 
            
            
            
    }
    
    public function action_dodaj() {
        
            $data["user"] = (string)$this->request->post('user');
            $data["pass"] = (string)$this->request->post('pass');
            $data["ranga"] = (string)$this->request->post('ranga');
            $data["kasa"] = (string)$this->request->post('kasa');
            $data["tir"] = (string)$this->request->post('tir');
            $data["rej"] = (string)$this->request->post('rej');
            $data["moc"] = (string)$this->request->post('moc');
            $data["tune"] = (string)$this->request->post('tune');
            $login = $this->request->post('user');
            //$data['okres'] = (string)$this->request->post('okres');
            
            $validationResult = $this->validate($data);
            
            
            $userLoggedIn = $this->session->get('logged', false);
            $mu = new Model_Uzytkownicy();
            $mr = new Model_Rank();
            #$mf = new Model_Firma();
            
            $checkUser = $mu->checkAddUser($login);
            
            if($checkUser == NULL){
            if($this->request->post("Dodaj")!=NULL && $validationResult){
                
                $x = $mu->addRow($data);
                var_dump($x);
            }
            }
            
            $view = View::factory('dodaj');
            $user = $mu->getUserById($userLoggedIn);
            $view->user = $mu->getUserById($userLoggedIn);
            $view->user = $this->user;
            $view->rank = $mr->getRankInfo($user);
            $view->list = $mu->getList();
            $this->content = $view->render(); 
    

    } 
     //admin:usun
    public function action_usun() {
        
            $userLoggedIn = $this->session->get('logged', false);
        
            $data["id"] = (string)$this->request->post('id');
            $data["user"] = (string)$this->request->post('user');
            $data["pass"] = (string)$this->request->post('pass');
            $data["ranga"] = (string)$this->request->post('ranga');
            $data["kasa"] = (string)$this->request->post('kasa');
            $data["tir"] = (string)$this->request->post('tir');
            $data["rej"] = (string)$this->request->post('rej');
            $data["moc"] = (string)$this->request->post('moc');
            $data["tune"] = (string)$this->request->post('tune');
            $data["okres"] = (string)$this->request->post('okres');
            $data["naprawa"] = (string)$this->request->post('kasa');
            $data["tuning"] = (string)$this->request->post('kasa');     
            
            

            $mu = new Model_Uzytkownicy();
            $mr = new Model_Rank();
            if($this->request->post("usun")!=NULL ){
                
                $x = $mu->delRow($data);
                #var_dump($x);
            }
             
            $view = View::factory('usun');
            $user = $mu->getUserById($userLoggedIn);
            $view->user = $mu->getUserById($userLoggedIn);
            $view->list = $mu->getList();
            $view->rank = $mr->getRankInfo($user);
            $view->user = $this->user;
            $this->content = $view->render(); 

     }
     
         public function action_accept() {
        
            $userLoggedIn = $this->session->get('logged', false);
             
            $mp = new Model_Przejazdy();
            $mu = new Model_Uzytkownicy();
            $mr = new Model_Rank();
             
            $data = array();
            $data["id"] = (string)$this->request->post('id');
            $user_id = (string)$this->request->post('user_id');
      
            #$mf = new Model_Firma();
            if($this->request->post("acc")!=NULL ){
                $data['is_acc'] = 'yes';
                $x = $mp->saveRowK($data);
               # var_dump($x);
                $summedData = $mp->getUserSumOfAcceptedRides($user_id);
                $mu->saveRow($user_id, $summedData);
            }
            if($this->request->post("del")!=NULL){
                $y = $mp->delRowK($data);
               # var_dump($y);
            }


         
            
            
            
            $view = View::factory('accept');
            $user = $mu->getUserById($userLoggedIn);
            $view->user = $mu->getUserById($userLoggedIn);
            $view->list = $mp->getNoAcceptList();
            $view->rank = $mr->getRankInfo($user);
            $view->user = $this->user;
            $this->content = $view->render(); 

            
    

    } 

    public function action_uprawnienia() {
            
            $userLoggedIn = $this->session->get('logged', false);
             
            $view = View::factory('uprawnienia');
            $mu = new Model_Uzytkownicy;
            $mp = new Model_Przejazdy();
            $mr = new Model_Rank();
            
            
            
            $data["id"] = (string)$this->request->post('id');
            $data["ranga"] = (string)$this->request->post('ranga');
            $data["kasa"] = (int)$this->request->post('kasa');
            $data["km"] = (int)$this->request->post('km');
            $data["litry"] = (int)$this->request->post('litry');
            $data["czas"] = (int)$this->request->post('czas');
            $data["ton"] = (int)$this->request->post('ton');
            $data["tir"] = (string)$this->request->post('tir');
            $data["rej"] = (string)$this->request->post('rej');
            $data["moc"] = (string)$this->request->post('moc');
            $data["przebieg"] = (string)$this->request->post('przebieg');
            $data["tune"] = (string)$this->request->post('tune');
            $data["kursy"] = (string)$this->request->post('kursy');
            
            if($this->request->post("zmien")!=NULL ){
                $x = $mu->changeRow($data);
                var_dump($x);
            }
            
            $user = $mu->getUserById($userLoggedIn);
            $view->user = $mu->getUserById($userLoggedIn);
            $view->list = $mu->getList();
            $view->rank = $mr->getRankInfo($user);
            $view->user = $this->user;
            $this->content = $view->render(); 
      }
    
      public function action_test() {
            
            $userLoggedIn = $this->session->get('logged', false);
             
            $view = View::factory('test');
            $mu = new Model_Uzytkownicy;
            $mp = new Model_Przejazdy();
            $mr = new Model_Rank();
            
            $user = $mu->getUserById($userLoggedIn);
            $view->user = $mu->getUserById($userLoggedIn);
            $view->list = $mu->getList();
            $view->rank = $mr->getRankInfo($user);
            $view->user = $this->user;
            $this->content = $view->render(); 
      }
}

