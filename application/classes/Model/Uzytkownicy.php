<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Uzytkownicy extends Kohana_Model {
    
    private $salt = 'Hfc5dm(9d!!4rsdhkdfk';

    public function getList() {

        $result = DB::select('*')
                ->from('kierowcy')
                ->execute()
                ->as_array(); 

        return $result;
    }

        public function getUserById($id =0){
        
         $result = DB::select('*')
                ->from('kierowcy')
                ->where('id', '=', $id)
                 ->limit(1)
                ->execute()
                ->as_array(); 
         
         if(!empty($result)){
             return $result[0];
         }
        return false;       
        
        
    }
    
    
    public function checkUser($login = '', $pass = ''){ 
         $result = DB::select('*')
                ->from('kierowcy')
                ->where('user', '=', $login)
                ->where('pass', '=', sha1($pass . $this->salt))
                 ->limit(1)
                ->execute()
                ->as_array(); 
         
         if(!empty($result)){
             return $result[0];
         }
        return false;       
    }  
    public function checkAddUser($login){ 
         $result = DB::select('*')
                ->from('kierowcy')
                ->where('user', '=', $login)
                 ->limit(1)
                ->execute()
                ->as_array(); 
         
         if(!empty($result)){
             return $result[0];
         }
        return false;
        
    }
     public function saveRow($id = 0,$data=array()){
         
     //    var_dump($id);
    //    var_dump($data['litry']);         
         
        $query = DB::Update('kierowcy')
        ->set(
            array
                (
                   'fkasa' => (int)$data['fkasa'],
                   'kasa' => (int)$data['km']*4,
                   'km' => (int)$data['km'],
                   'litry' => (int)$data['litry'],
                   'ciezar' => (int)$data['ciezar'],
                   'godz' => (int)$data['godz'],
                   'przebieg' => (int)$data['km'],
                   'kursy' => $data['kursy'] 
                )
            )
        ->where('id', '=', $id)
        ->execute();
        
        
         return $query;
     }
     
    public function updatePass($id = 0,$data=array()){
     $query = DB::update('kierowcy')
        ->set(
            array
                (
                   'pass' => sha1($data['npass'] . $this->salt),
                )
            )
        ->where('id', '=', $id)
        ->execute();
         return $query;
    }
     
       public function addRow($data=array()){
        $query = DB::insert('kierowcy', array('user', 'pass', 'ranga', 'kasa', 'tir', 'rej', 'moc','tune',))
        ->values(array($data['user'], sha1($data['pass'] . $this->salt), $data['ranga'], $data['kasa'], $data['tir'], $data['rej'], $data['moc'], $data['tune'], ))
        ->execute();
        return $query;
}

 public function delRow($data=array()){
        $query = DB::delete('kierowcy')
        ->where('id', '=', array($data['id']))
        ->where('user', '=', array($data['user']))
        ->execute();
        return $query;
}

public function changeRow( $data=array()){
         
     //    var_dump($id);
    //    var_dump($data['litry']);         
         
        $query = DB::Update('kierowcy')
        ->set(
            array
                (
                   'ranga' => $data['ranga'],
                   'kasa' => (int)$data['kasa'],
                   'km' => (int)$data['km'],
                   'litry' => (int)$data['litry'],
                   'ciezar' => (int)$data['ton'],
                   'godz' => (int)$data['czas'],
                   'tir' => $data['tir'],
                   'rej' => $data['rej'],
                   'moc' => $data['moc'],
                   'przebieg' => $data['przebieg'],
                   'tune' => $data['tune'],
                   'kursy' => $data['kursy'],
                )
            )
        ->where('id', '=', $data['id'])
        ->execute();

}

}