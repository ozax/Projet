<?php

namespace Models;

use Services\Connect;

class Programme
{
    protected $idProgramme;
    protected $sujet;
    protected $description;
    protected $animateur;
    protected $dateDiffusion;
    protected $heurDebut;
    protected $heurFin;
    protected $datePublication;
    private $db;

    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }
    public function getAllProgramme($day)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM emission WHERE type='programme' AND jour = '$day' ORDER BY idProgramme DESC");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function getProgramme($id)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM emission WHERE idProgramme = $id and type='programme'");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function ajouterProgramme($sujet,$description,$animateur,$heurDebut,$heurFin,$jour)
    {
        $db = $this->db;

        $query = $db->prepare("INSERT INTO `emission`( sujet, description, animateur, heurDebut, heurFin, jour, type, datePublication )
	  VALUES(:sujet, :description, :animateur, :heurDebut, :heurFin, :jour, 'programme' , NOW())");
        return $query->execute(array(
            'sujet' => $sujet,
            'description'=> $description,
            'animateur' => $animateur,
            'heurDebut' => $heurDebut,
            'heurFin' => $heurFin,
            'jour' => $jour,
        ));

    }

    public function modifierProgramme($id,$sujet,$animateur,$heurDebut,$heurFin,$description,$jour){
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


    public function supprimerProgramme($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `emission` WHERE `idProgramme` =:id");
        return $query->execute(array(
            'id'=>$id
        ));
    }


    public Function NbrProgramme(){
        $db = $this->db;

        return  $this->db->exec("SELECT COUNT(*) FROM emission where type='programme'");
    }

    public function getNowEmission(){
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM emission WHERE dateDiffusion = CURDATE() AND heurDebut < CURTIME() AND heurFin > CURTIME()");
        return $reponse->fetch($db::FETCH_ASSOC);
    }
}