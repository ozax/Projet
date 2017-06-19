<?php
namespace Controllers\Radio;


use Models\Programme;

class ProgrammeController{

    public function jumbotronAction(){
        require 'Config/config.php';
        $jumbotoron = new Programme();
        $jumbotoron = $jumbotoron->getNowEmission();
        require './Views/Radio/home-jumbotron.php';
    }

    public function showProgramme($day){

        $programme = new Programme();
        $programme = $programme->getAllProgramme($day);
        require './Views/Radio/grille.php';
    }
}

