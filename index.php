<?php

ob_start();

require './engine/Autoloader.php';
\engine\Autoloader::register();

new controller\Router();

ob_end_flush();

?>