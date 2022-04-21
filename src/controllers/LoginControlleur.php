<?php
namespace Gsb\controllers;
use Gsb\models\LoginModel;

class LoginControlleur{
    
    // Déclartion des variables
    private $model;

    // CONSTRUCTEUR
    public function __construct(){
        $this->model = new LoginModel;
    }

    // Fonctions privées
    private function getBddMdp($login){
        return $this->model->getMdpUser($login);
    }
    // Fonction publique

    public function verif(){
        
        $user_login=$_POST['login'];
        $user_mdp=$_POST['mdp'];
        
        $BonMdp=$this->getBddMdp($user_login);

        if($user_mdp==$BonMdp->mdp and $user_mdp!=null){
            
            $_SESSION['token']='ok';
            header("Location:mon-espace");
        }else{
            header("Location:./");
        }
    }    
}