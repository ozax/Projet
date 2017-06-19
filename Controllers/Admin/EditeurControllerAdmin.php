<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 26/04/2017
 * Time: 21:50
 */

namespace Controllers\Admin;
use Models\Editeur;
use Services\FlashMessages;

class EditeurControllerAdmin
{

    public  function showEditor(){
        $editeur = new Editeur();
        $editeur = $editeur->getAllEditeur();

        require './Views/Admin/editeurs.php';
    }

    public function ajouterEditeur(){

        require "./config/config.php";
        $editeur = new Editeur();
        $editeur = $editeur->ajouterEditeur(htmlspecialchars ($_POST["nom"]),$_POST["prenom"],$_POST["email"]);
        $msg5= new FlashMessages();
        $msg5->success('L\'editeur a bien été ajouté', $repertory.'/admin/editeurs');

    }



}