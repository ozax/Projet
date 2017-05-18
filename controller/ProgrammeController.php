<?php
namespace controller;

use model\Programme;
use Engine\Autoload;

class ProgrammeController{


    public function showProgramme(){

       $programme = new Programme();
       $programme = $programme->getAllProgramme();
       require './view/grille.php';


	
	
}

}

