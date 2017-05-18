<?php

namespace model;


class Emission extends Programme{
private $Fichier;
private $db;

public function __construct(){
    $this->db = new \engine\Connect();
    $this->db = $this->db->getPdo();
}

    public function getAllEmission()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM emission ORDER BY idProgramme DESC");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }
 
	

  public function ajouterEmission($sujet,$description,$animateur,$dateDiffusion,
         $heurDebut, $heurFin,$datePublication,$Fichier){
       $db=parent::$db;			
			parent::AjouterProgramme($sujet,$description,$animateur,$dateDiffusion,
         $heurDebut, $heurFin,$datePublication);
		 $query = $db->prepare("UPDATE `emission` SET `Fichier`=:Fichier");	 
		 
		 return $query->execute(array('Fichier'=>$Fichier));
		 
		 }

 public function modifierEmission($id,$sujet,$description,$animateur,$dateDiffusion,
         $heurDebut, $heurFin,$datePublication,$Fichier){
			
   $db=parent::$db;	
	return 	parent::modifierProgramme($id,$sujet,$description,$animateur,$dateDiffusion,
         $heurDebut, $heurFin,$datePublication);
	
	$quer=$db->prepare("UPDATE `emission` SET `Fichier`=:Fichier WHERE idProgramme=:id");
     $quer->execute(array('Fichier'=>$Fichier,'id'=>$id));
	
	return $quer;
	    }

	
	public function supprimerEmission($id){
		return parent::supprimerProgramme($id);
	}
	
	}