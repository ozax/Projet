<?php
namespace Controller;

use model\Emission;
use Engine\Autoload;

class EmissionController
{

    public function showEmission()
    {
        require 'config/config.php';
        $emission = new Emission();
        $emission = $emission->getAllEmission();

        require './view/replay.php';


    }
}

