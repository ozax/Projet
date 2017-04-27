<?php
ob_start();

require './engine/Autoloader.php';
\engine\Autoloader::register();

new controller\admin\Router();

ob_end_flush();

?>