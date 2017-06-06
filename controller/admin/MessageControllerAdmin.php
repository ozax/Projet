<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 24/05/2017
 * Time: 00:59
 */

namespace Controller\Admin;
use model\Message;


class MessageControllerAdmin
{
    public function showAllmessages(){
        $message = new Message();
        $message = $message->AllMessage();

        require './view/admin/messages.php';
    }

}