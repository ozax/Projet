<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 26/04/2017
 * Time: 21:50
 */

namespace controller\admin;
use model\Editeur;

class EditeurControllerAdmin
{

    public  function showEditor(){
        $editeur = new Editeur();
        $editeur = $editeur->getAllEditeur();

        require './view/admin/editeurs.php';
    }

    public function ajouterEditeur(){

        $editeur = new Editeur();
        $editeur = $editeur->ajouterEditeur($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["motDePasse"]);
    }




}