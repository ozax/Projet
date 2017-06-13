<?php
namespace Controllers\Radio;


use Models\Emission;

class EmissionController{
    public function jumbotronAction(){
        $repertory = "/Arch";
        require './Views/Radio/home-jumbotron.php';
    }

    public function showEmission()
    {
        require 'config/config.php';
        $emission = new Emission();
        $emission = $emission->getAllEmission();

        require './Views/Radio/replay.php';


    }
}

