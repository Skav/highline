<?php defined('SYSPATH') OR die('No direct script access.');

class Model_Przejazdy extends Kohana_Model {

    public function addRowK($userLoggedIn = 0, $data = array()) {

        $query = DB::insert('przejazdy', array('user_id', 'fkasa', 'kasa', 'km', 'litry', 'ciezar', 'godz', 'kursy', 'start', 'koniec', 'typ'))
                ->values(array($userLoggedIn, $data['fkasa'], $data['kasa'], $data['km'], $data['litry'], $data['ciezar'], $data['godz'], $data['kursy'], $data['start'], $data['koniec'], $data['typ']))
                ->execute();
        return $query;
    }

    public function getNoAcceptList() {
        $result = DB::select('*')
                ->from('przejazdy')
                ->where('is_acc', '=', 'no')
                ->execute()
                ->as_array();
        return $result;
    }

    public function delRowK($data = array()) {

        $query = DB::delete('przejazdy')
                ->where('id', '=', array($data['id']))
                ->execute();
        return $query;
    }

    public function saveRowK($data = array()) {

        $query = DB::update('przejazdy')
                ->set(
                        array
                            (
                            'is_acc' => $data['is_acc']
                        )
                )
                ->where('id', '=', $data['id'])
                ->execute();
        return $query;
    }
    
    public function getUserSumOfAcceptedRides($id) {
        $result = DB::select(DB::expr('SUM(`fkasa`) AS fkasa, SUM(`km`) AS km, SUM(`kasa`) AS kasa, SUM(`litry`) AS litry, SUM(`ciezar`) AS ciezar, SUM(`godz`) AS godz, SUM(`przebieg`) AS przebieg, SUM(`kursy`) AS kursy' ))
                ->from('przejazdy')
                ->where('is_acc', '=', 'yes')
                ->where('user_id', '=', $id)
                ->execute()
                ->as_array();
        
        //echo Database::instance()->last_query;
        //exit;
        return $result[0];
    } 
    
}
