<?php
namespace Controllers\Radio;


use Models\Emission;

class EmissionController{

    public function showEmission($day)
    {
        require 'config/config.php';
        $emission = new Emission();
        $emission = $emission->getAllEmission($day);

        require './Views/Radio/replay.php';


    }
}

