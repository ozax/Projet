<?php

namespace Models;


use Services\Connect;

class Emission extends Programme{

    private $Fichier;
    private $db;

public function __construct(){
    $this->db = new Connect();
    $this->db = $this->db->getPdo();
}

    public function getAllEmission($day)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM emission WHERE type='emission' and jour = '".$day."' ORDER BY heurDebut");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function getEmissionByDay()
    {
        $db =$this->db;
        $reponse = $this ->db->query("SELECT * FROM emission ORDER BY jour");
        return $reponse -> fetchAll ($db::FETCH_ASSOC);
    }

    public function getEmission($id)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM emission WHERE idProgramme = $id and type='emission'");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function ajouterEmission($sujet,$description,$animateur,$heurDebut,$heurFin,$jour)
    {
        $db = $this->db;

        $query = $db->prepare("INSERT INTO `emission`( sujet, description, animateur, heurDebut, heurFin, jour, type, datePublication )
	  VALUES(:sujet, :description, :animateur, :heurDebut, :heurFin, :jour, 'emission', NOW())");
        return $query->execute(array(
            'sujet' => $sujet,
            'description'=> $description,
            'animateur' => $animateur,
            'heurDebut' => $heurDebut,
            'heurFin' => $heurFin,
            'jour' => $jour,
        ));

    }
    public function modifierEmission($id,$sujet,$animateur,$heurDebut,$heurFin,$description,$jour){
        $db = $this->db;
        $query = $db->prepare("UPDATE emission SET sujet= :sujet, animateur =:animateur ,heurDebut=:heurDebut, heurFin=:heurFin, description=:description, jour=:jour WHERE idProgramme = '".$id."'");
        return $query->execute(array(

            'sujet' => $sujet,
            'animateur' => $animateur,
            'heurDebut' => $heurDebut,
            'heurFin' => $heurFin,
            'description' => $description,
            'jour' => $jour,
        ));

    }
    public function supprimerEmission($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `emission` WHERE `emission`.`idProgramme` =:id");
        return $query->execute(array(
            'id'=>$id
        ));
    }


	
	}