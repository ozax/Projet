<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 26/04/2017
 * Time: 20:35
 */

namespace Controllers\Admin;
use Models\Programme;
use Models\Autoload;
use Services\FlashMessages;


class ProgrammeControllerAdmin
{

    public function showProgramme($day){

        $programme = new Programme($day);
        $programme = $programme->getAllProgramme($day);
        require './Views/Admin/programmes.php';

    }



    public function postnewProgramme(){
        require "./config/config.php";

        $programme = new Programme();
        $programme = $programme->ajouterProgramme ($_POST["sujet"], $_POST["description"], $_POST["animateur"], $_POST["heurDebut"], $_POST["heurFin"], $_POST["jour"]);

        $msg1= new FlashMessages();
        $msg1->success('Le programme a bien été ajouté', $repertory.'/admin/programmes');



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