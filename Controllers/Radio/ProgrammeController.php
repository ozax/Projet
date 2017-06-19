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

    public function showProgramme(){

        $programme = new Programme();
        $programme = $programme->getAllProgramme();
        require './Views/Radio/grille.php';
    }
}

