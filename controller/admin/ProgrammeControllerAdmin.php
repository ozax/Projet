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



    public function ajouterProgramme($sujet,$description,$heurDebut,$heurFin,$animateur,$jour){


        $programme= new Programme();
        $programme = $programme->AjouterProgramme(htmlspecialchars($sujet),htmlspecialchars($description),htmlspecialchars($heurFin),htmlspecialchars($heurDebut),htmlspecialchars ($animateur),htmlspecialchars ($jour));
        require './view/admin/edit-programme.php';

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