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

    public function getAllEmission()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM emission WHERE type='emission' ORDER BY heurDebut");
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

    public function ajouterEmission($sujet,$description,$animateur,$heurDebut,$heurFin,$Fichier,$jour)
    {
        $db = $this->db;

        $query = $db->prepare("INSERT INTO `emission`(`sujet`,`description`,`animateur`,`datePublication`, `heurDebut`,type='emission',`heurFin`,,`Fichier`,`jour` )
	  VALUES(:sujet,:description,:animateur,:heurDebut,:heurFin,:animateur,:jour,NOW())");
        return $query->execute(array(
            'sujet' => $sujet,
            'description' => $description,
            'animateur' => $animateur,
            'heurDebut' => $heurDebut,
            'heurFin'=>$heurFin,
            'Ficher' => $Fichier,
            'jour' => $jour


        ));
    }
    public function modifierEmission($id,$sujet,$description,$heurDebut,$heurFin,$animateur,$fichier,$jour){
        $db = $this->db;
        $query = $db->prepare("UPDATE emission SET sujet =:s, description =:d,heurDebut=:hd, heurFin =:hf, animateur =:f, jour=:j WHERE emission.idProgramme=$id");
        return $query->execute(array(

            's' => $sujet,
            'd' => $description,
            'hd'=>$heurDebut,
            'hf'=>$heurFin,
            'a'=>$animateur,
            'f'=>$fichier,
            'j'=>$jour,
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