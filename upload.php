<?php
require './Services/Autoloader.php';

\Services\Autoloader::register();

require './Config/config.php';

$repertory = "/radio-soummam";
echo '<pre>';
var_dump($_FILES);
echo '</pre>';
die;
$target_dir = "upload/images";

$upload = new \Services\Upload();
$upload->uploadFile("upload/mp3");

$msg = new \Services\FlashMessages();
if (isset($msg))
    $msg->display();


?>