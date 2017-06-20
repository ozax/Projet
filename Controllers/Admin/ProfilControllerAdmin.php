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
            $_SESSION['login_name'] = $login['nom'].' '.$login['prenom'];
            $_SESSION['pass'] = $login['motDePasse'];
            $_SESSION['admin'] = $login["idEditeur"];

            header("Location: ". $repertory. "/admin");
        }

    }

    public function logout(){
        require 'Config/config.php';
        session_unset();
        header("Location: ". $repertory. "/login");
    }

    public function editProfil(){
        require "./config/config.php";
        $profil = new Editeur();
        $profil = $profil->getEditeur($_SESSION['admin']);
        $_SESSION['profil']['nom'] = $profil['nom'];
        $_SESSION['profil']['prenom'] = $profil['prenom'];
        $_SESSION['profil']['email'] = $profil['email'];
        require './Views/Admin/edit-profile.php';
        unset($_SESSION['profil']);
    }

    public function postEditProfil()
    {
        require "./config/config.php";
        if($_POST["mdp1"] == $_POST["mdp2"] && $_SESSION['pass'] == md5($_POST["mdp"])){
            $editeur = new Editeur();
            $editeur = $editeur->updateEditeur($_SESSION['admin'], $_POST["nom"], $_POST["prenom"], $_POST["email"], md5($_POST["mdp2"]));
        }else{
            $editeur = false;
        }


        if($editeur){
            $msg = new FlashMessages();
            $msg->info('Votre profil a été modifier', $repertory.'/admin/profil/edit');
        }else{
            $msg = new FlashMessages();
            $msg->warning('Votre profil n\'a été modifier', $repertory.'/admin/profil/edit');
        }


    }
}