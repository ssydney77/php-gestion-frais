<?php
session_start();
require("../vendor/autoload.php");

// use App\Database;
use Gsb\controllers\AccueilControlleur;
use Gsb\controllers\ConnexionControlleur;
use Gsb\controllers\DeconnexionControlleur;
use Gsb\controllers\ElementsControlleur;
use Gsb\controllers\InfoControlleur;
use Gsb\controllers\ListeFraisForfaitControlleur;
use Gsb\controllers\ListeMoisControlleur;
use Gsb\controllers\LoginControlleur;

$url=($_GET['url'])??null;

if(isset($_SESSION['token'])){
    $jeton=true;
}else{
    $jeton=false;
}

if($url=='connexion'){
    $verif = new LoginControlleur;
    $info = new InfoControlleur;
    $verif->verif();
    $info->user_info();
}
elseif($url=='mon-espace' && $jeton==true){
    $accueil = new AccueilControlleur;
    $accueil->index();
}
elseif($url=='mon-espace/saisie-fiche-de-frais' && $jeton==true){
    $f = new ListeFraisForfaitControlleur;
    $f->index();
}
elseif($url=='mon-espace/mes-fiches-de-frais' && $jeton==true){
    $f = new ListeMoisControlleur;
    $f->index();
}
elseif($url=='deconnecter' && $jeton==true){
    $deco = new DeconnexionControlleur;
    $deco->deconnecter();
}
else{
    $connexion = new ConnexionControlleur;
    $connexion->index();
}