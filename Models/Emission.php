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
        $reponse = $this->db->query("SELECT * FROM emission ORDER BY idProgramme DESC");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function getEmissionByDay()
    {
        $db =$this->db;
        $reponse = $this ->db->query("SELECT * FROM emission ORDER BY jour");
        return $reponse -> fetchAll ($db::FETCH_ASSOC);
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


	
	}