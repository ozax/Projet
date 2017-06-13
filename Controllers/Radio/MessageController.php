<?php

namespace Controllers\Radio;

use Models\Message;
use Services\FlashMessages;

class MessageController
{
    public function contact(){
        require './Views/Radio/contact.php';
    }

    public function postMessage(){
        $message = new Message();
        $reponse = $message->envoieMessage($_POST["nom"], $_POST["email"], $_POST["sujet"], $_POST["message"] );
        $msg = new FlashMessages();
        $msg->info('votre message a bien été envoyé');

        require './Views/Radio/contact.php';
    }
}