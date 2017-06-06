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
        $reponse = $this->db->query("SELECT * FROM emission ORDER BY idProgramme DESC WHERE type='programme'");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }
    public function AjouterProgramme($sujet,$description, $heurDebut, $heurFin,$animateur,$type='programme',$jour){
        $db = $this->db;
        $query = $db->prepare("INSERT INTO emission(sujet,description, heurDebut,heurFin,datePublication,animateur,jour,type)
                       VALUES (:sujet,:description, :heurDebut, :heurFin,:animateur,:jour,:type,NOW()");
        return $query->execute(
            array(
                'sujet'=>$sujet,
                'description'=>$description,
                'heurDebut'=>$heurDebut,
                'heurFin'=>$heurFin,
                'animateur'=>$animateur,
                'jour'=>$jour,'type'=>$type,
            ));
    }


    public function ModifierProgramme( $id,$sujet,$description,$animateur,$dateDiffusion, $heurDebut, $heurFin){
        $db = $this->db;
        $query = $db->prepare("UPDATE `emission` SET `sujet`=:sujet,`description`=:description,
                                 `animateur`=:animateur,`dateDiffusion`=:dateDiffusion, `heurDebut`=:heurDebut,`heurFin`=:heurFin)");
        return $query->execute(array('sujet'=>$sujet,'id'=>$id,
            'description'=>$description,'animateur'=>$animateur,
            'dateDiffusion'=>$dateDiffusion, 'heurDebut'=>$heurDebut,'heurFin'=>$heurFin));
    }


    public function SupprimerProgramme($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `emission` WHERE `idProgramme`=:id");
        return $query->execute(array('id'=>$id));
    }
    public Function NbrProgramme(){
        $db = $this->db;

        return  $this->db->exec("SELECT COUNT(*) FROM emission where type='programme'");
    }
}