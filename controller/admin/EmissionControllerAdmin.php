<?php

namespace Controller\admin;
use model\Emission;
use model\Editeur;


class EmissionControllerAdmin
{

    public function showEmission()
    {
        require "./config/config.php";


        $emission = new Emission();
        $emission = $emission->getAllEmission();




        require './view/admin/emissions.php';



    }

    public function ajouterEmission(){

        if (isset($_POST["sujet"])) {
            $emission = new Emission();
            $emission = $emission->ajouterEmission ($_POST["sujet"], $_POST["description"], $_POST["animateur"], $_POST["jour"], $_POST["heurDebut"], $_POST["heurFin"], $_POST["Fichier"]);
        }
        require './view/admin/edit-emission.php';

    }

    public function modifierEmission(){
        $emission = new Emission();
        $emission = $emission->modifierEmission($_GET["idProgramme"],$_POST["sujet"], $_POST["description"],$_POST["animateur"],$_POST["dateDiffusion"],$_POST["heurDebut"],$_POST["heurFin"],$_POST["datePublication"],$_POST["Fichier"]);
    }

    public function supprimerEmission (){
        $emission = new Emission();
        $emission = $emission->supprimerEmission($_GET["idProgramme"]);

    }

}