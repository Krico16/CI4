<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {


    function getUsers() {
        $db = \Config\Database::connect();
        $response = array();
        $query = $db->query("Select * from usuario");
        $response = $query->getResultArray();
        
        return $response;
    }

    
}
