<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 26/04/2017
 * Time: 20:35
 */

namespace controller\admin;
use model\Programme;

class ProgrammeControllerAdmin
{

    public function showProgramme(){

        $programme = new Programme();
        $programme = $programme->getAllProgramme();
        require './view/admin/programmes.php';

    }


    public function ajouterProgramme(){


        $programme= new Programme();
        $programme = $programme->AjouterProgramme($_POST["sujet"], $_POST["description"],$_POST["animateur"],$_POST["dateDiffusion"],$_POST["heurDebut"],$_POST["heurFin"],$_POST["datePublication"]);

    }

    public function modifierProgramme(){

        $programme= new Programme();
        $programme = $programme->ModifierProgramme($_GET["idProgramme"],$_POST["sujet"], $_POST["description"],$_POST["animateur"],$_POST["dateDiffusion"],$_POST["heurDebut"],$_POST["heurFin"],$_POST["datePublication"]);
    }

    public function supprimerProgramme(){

        $programme = new Programme();
        $programme = $programme->SupprimerProgramme($_GET["idProgramme"]);
    }

    public function nbrProgramme(){

        $programme = new Programme();
        $programme = $programme->NbrProgramme();
    }

}