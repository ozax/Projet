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

        $emission = new Emission();
        $emission = $emission->ajouterEmission($_POST["sujet"], $_POST["description"],$_POST["animateur"],$_POST["dateDiffusion"],$_POST["heurDebut"],$_POST["heurFin"],$_POST["datePublication"],$_POST["Fichier"]);


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