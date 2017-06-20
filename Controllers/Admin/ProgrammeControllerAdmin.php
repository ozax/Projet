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
        $msg1->info('Le programme a bien été ajouté', $repertory.'/admin/programmes');



    }

    public function editProgramme($id){
        $programme = new Programme($id);
        $programme = $programme->getProgramme($id);
        $_SESSION['programme']['sujet'] = $programme['sujet'];
        $_SESSION['programme']['description'] = $programme['description'];
        $_SESSION['programme']['animateur'] = $programme['animateur'];
        $_SESSION['programme']['heurDebut'] = $programme['heurDebut'];
        $_SESSION['programme']['heurFin'] = $programme['heurFin'];
        $_SESSION['programme']['jour'] = $programme['jour'];
        require './Views/Admin/edit-programme.php';
        unset($_SESSION['programme']);
    }

    public function postEditProgramme($id){
        require "./config/config.php";
        $programme = new Programme($id);
        $programme = $programme->modifierProgramme($id,$_POST["sujet"], $_POST["animateur"], $_POST["heurDebut"], $_POST["heurFin"], $_POST["description"], $_POST["jour"]);

        $msg1= new FlashMessages();
        $msg1->info('Le programme a bien été modifié', $repertory.'/admin/programmes');

    }

    public function deleteProgramme($id){
        require "./config/config.php";
        $programme = new Programme();
        $programme = $programme->supprimerProgramme($id);
        $msg = new FlashMessages();
        $msg->success('Le programme a bien été supprimé', $repertory.'/admin/programmes');
    }

    public function nbrProgramme(){

        $programme = new Programme();
        $programme = $programme->NbrProgramme();
    }

}