<?php

namespace model;

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
        $this->db = new \engine\Connect();
        $this->db = $this->db->getPdo();
    }
    public function getAllProgramme()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM programme ORDER BY idProgramme DESC");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }
    public function AjouterProgramme($sujet,$description,$animateur,$dateDiffusion, $heurDebut, $heurFin){
      $db = $this->db;
      $query = $db->prepare("INSERT INTO programme(sujet,description,animateur,dateDiffusion, heurDebut,heurFin)
                       VALUES (:sujet,:description,:animateur,:dateDiffusion, :heurDebut, :heurFin)");
      return $query->execute(array('sujet'=>$sujet, 'description'=>$description,
          'animateur'=>$animateur,'dateDiffusion'=>$dateDiffusion,
          'heurDebut'=>$heurDebut,'heurFin'=>$heurFin));
         }


    public function ModifierProgramme( $id,$sujet,$description,$animateur,$dateDiffusion, $heurDebut, $heurFin){
        $db = $this->db;
        $query = $db->prepare("UPDATE `programme` SET `sujet`=:sujet,`description`=:description,
                                 `animateur`=:animateur,`dateDiffusion`=:dateDiffusion, `heurDebut`=:heurDebut,`heurFin`=:heurFin)");
        return $query->execute(array('sujet'=>$sujet,'id'=>$id,
            'description'=>$description,'animateur'=>$animateur,
            'dateDiffusion'=>$dateDiffusion, 'heurDebut'=>$heurDebut,'heurFin'=>$heurFin));
    }


    public function SupprimerProgramme($id){
    $db = $this->db;
    $query = $db->prepare("DELETE FROM `programme` WHERE `idProgramme`=:id");
    return $query->execute(array('id'=>$id));
    }
    public Function NbrProgramme(){
        $db = $this->db;

        return  $this->db->exec("SELECT COUNT(*) FROM programme");
    }
}