<?php
namespace Controllers\Radio;


use Models\Programme;

class ProgrammeController{
    public function showProgramme(){

        $programme = new Programme();
        $programme = $programme->getAllProgramme();
        require './Views/Radio/grille.php';
    }
}

