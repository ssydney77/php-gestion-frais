<?php

namespace Gsb\models;

use App\Database;

class LoginModel{

    // Déclartion des variables privées
    private $db;
    
    // CONSTRUCTEUR
    public function __construct(){
        $this->db = new Database();
    }

    // Fonction publique
    public function getMdpUser($user_login){
        return $this->db->query("SELECT mdp FROM visiteur WHERE login=?",[$user_login])->fetch();
    }   
}