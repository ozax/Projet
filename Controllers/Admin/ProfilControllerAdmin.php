<?php

namespace Controllers\Admin;


use Models\Editeur;
use Services\FlashMessages;

class ProfilControllerAdmin
{
    public function login(){
        require 'Config/config.php';
        require './Views/Admin/login.php';
    }

    public function postLogin(){
        require 'Config/config.php';
        $login = new Editeur();
        $login = $login->getLogin($_POST["email"], md5($_POST["pass"]));
        if($login == false){
            $msg = new FlashMessages();
            $msg->success('Authentification échouée', $repertory.'/admin/login');
        }else{
            if ($login["idEditeur"] == 1)
                $_SESSION['admin'] = 1;
            else
                $_SESSION['admin'] = 0;
            header("Location: ". $repertory. "/admin");
        }

    }

    public function logout(){
        require 'Config/config.php';
        session_unset();
        header("Location: ". $repertory. "/login");
    }
}