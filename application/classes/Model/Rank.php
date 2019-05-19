<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Rank extends Kohana_Model {
    
    public function getRankInfo($user){
        
        $result = DB::select('*')
                ->from('rank')
                ->where('rank', '=', $user['ranga'])
                ->limit(1)
                ->execute()
                ->as_array();
        
        if(!empty($result)){
             return $result[0];
         }
        return false;
    }
    
    public function getList() {

        $result = DB::select('*')
                ->from('rank')
                ->execute()
                ->as_array(); 

        return $result;
    }
    
}