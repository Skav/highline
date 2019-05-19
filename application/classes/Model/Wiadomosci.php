<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Wiadomosci extends Kohana_Model {
    

    public function sendMessange($data = array()){
        
        $query = DB::insert('pw', array('send_user', 'user_nick', 'head', 'text'))
            ->values(array($data['send_user'], $data['nick'], $data['head'], $data['text']))
             ->execute();
        return $query;
    }
    
    public function takeMessangeByNick($user){
        
        $result = DB::select('*')
                ->from('pw')
                ->where('user_nick', '=', $user['user'])
                ->where('type', '=', 'no')
                ->execute()
                ->as_array();
        return $result;
        
    }
    public function takeAcceptMessange($user){
        
        $result = DB::select('*')
                ->from('pw')
                ->where('user_nick', '=', $user['user'])
                ->where('type', '=', 'yes')
                ->execute()
                ->as_array();
        return $result;
        
    }
    public function delRowMessange($data = array()) {

        $query = DB::update('pw')
                ->set(
                        array
                            (
                            'type' => $data['del']
                        )
                )
                ->where('id', '=', array($data['id']))
                ->execute();
        return $query;
    }
    
    public function saveRowMessange($data = array()) {

        $query = DB::update('pw')
                ->set(
                        array
                            (
                            'type' => $data['acc']
                        )
                )
                ->where('id', '=', array($data['id']))
                ->execute();
        return $query;
    }
    }
    
    
    
    
