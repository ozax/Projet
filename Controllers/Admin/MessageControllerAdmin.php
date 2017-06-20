<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 24/05/2017
 * Time: 00:59
 */

namespace Controllers\Admin;
use Models\Message;


class MessageControllerAdmin
{
    public function showAllmessages(){

        require "./config/config.php";

        $message = new Message();
        $message = $message->AllMessage();

        require './Views/Admin/messages.php';
    }


   public function consultMessage($id)
   {
       require "./config/config.php";
       $message = new Message();
       $message= $message->consulterMessage ($id);
       require './Views/Admin/message.php';



   }

}