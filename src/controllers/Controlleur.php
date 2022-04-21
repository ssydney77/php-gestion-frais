<?php 

namespace Gsb\controllers;

class Controlleur{

    public function render(string $vue, $data = null){
        
        ob_start();

        include("../src/views/$vue.php");   

        $contenu=ob_get_clean();

        include("../src/views/template/template.php");
    }
} 