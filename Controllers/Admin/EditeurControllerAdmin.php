<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 26/04/2017
 * Time: 21:50
 */

namespace Controllers\Admin;
use Models\Editeur;

class EditeurControllerAdmin
{

    public  function showEditor(){
        $editeur = new Editeur();
        $editeur = $editeur->getAllEditeur();

        require './Views/Admin/editeurs.php';
    }

    public function ajouterEditeur(){
        if (isset($_POST["nom"])){
        $editeur = new Editeur();
        $editeur = $editeur->ajouterEditeur(htmlspecialchars ($_POST["nom"]),$_POST["prenom"],$_POST["email"]);
    }
    require './Views/Admin/add-editeur.php';
    }



}