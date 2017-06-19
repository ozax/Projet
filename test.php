<?php

use Models\Emission;

require './Services/Autoloader.php';

\Services\Autoloader::register();

require "./config/config.php";
$emission = new Emission();
$emission = $emission->ajouterEmission ('test', 'test','test','10:00','12:00','samedi');
var_dump ($emission);