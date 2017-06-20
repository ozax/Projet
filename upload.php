<?php
require './Services/Autoloader.php';

\Services\Autoloader::register();

require './Config/config.php';

$repertory = "/radio-soummam";
echo '<pre>';
var_dump($_FILES);
echo '</pre>';
$target_dir = "upload/images";

$upload = new \Services\Upload();
$upload->uploadImage("upload/images/emissions");

$msg = new \Services\FlashMessages();
if (isset($msg))
    $msg->display();


?>