<?php

namespace Controllers\Admin;

use Models\Emission;
use Models\Editeur;
use Models\Autoload;
use Services\FlashMessages;
use Services\Upload;


class EmissionControllerAdmin
{

    public function showEmission($day)
    {
        require "./config/config.php";


        $emission = new Emission();
        $emission = $emission->getAllEmission($day);


        require './Views/Admin/emissions.php';


    }

    public function postnewEmission()
    {
        require "./config/config.php";

        $upload = new Upload();
        $upload->uploadFile("upload/mp3");
        $img = "mp3/" . $_FILES["file"]["name"];

        $emission = new Emission();
        $emission = $emission->ajouterEmission($_POST["sujet"], $_POST["description"], $_POST["animateur"], $_POST["heurDebut"], $_POST["heurFin"], $_POST["jour"],$img);

        $msg2 = new FlashMessages();
        $msg2->success('L\'emission a bien été ajouté', $repertory . '/admin/emissions');


    }

    public function editEmission($id)
    {
        $emission = new Emission($id);
        $emission = $emission->getEmission($id);
        $_SESSION['emission']['sujet'] = $emission['sujet'];
        $_SESSION['emission']['description'] = $emission['description'];
        $_SESSION['emission']['animateur'] = $emission['animateur'];
        $_SESSION['emission']['heurDebut'] = $emission['heurDebut'];
        $_SESSION['emission']['heurFin'] = $emission['heurFin'];
        $_SESSION['emission']['jour'] = $emission['jour'];
        require './Views/Admin/edit-emission.php';
        unset($_SESSION['emission']);
    }

    public function postEditEmission($id)
    {
        require "./config/config.php";
        $emission = new Emission();
        if (!empty($_FILES["file"]["tmp_name"])) {
            $upload = new Upload();
            $upload->uploadFile("upload/mp3");
            $img = "mp3/" . $_FILES["file"]["name"];
        } else {
            $emis = $emission->getEmission($id);

            $img = strval($emis['Fichier']);
        }

        $emission = $emission->modifierEmission($id, $_POST["sujet"], $_POST["animateur"], $_POST["heurDebut"], $_POST["heurFin"], $_POST["description"], $_POST["jour"], $img);
        $msg1 = new FlashMessages();
        $msg1->success('L\'emission a bien été modifié', $repertory . '/admin/emissions');

    }

    public function deleteEmission($id)
    {
        require "./config/config.php";
        $emission = new Emission();
        $emission = $emission->SupprimerEmission($id);
        $msg = new FlashMessages();
        $msg->success('L\'emission a bien été supprimé', $repertory . '/admin/emissions');
    }

}