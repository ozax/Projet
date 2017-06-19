<?php

namespace Models;


use Services\Connect;

class Page{

    private $id;
    private $title;
    private $content;
    private $date;
    private $db;

    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }

    public function getAllPage()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM page");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function getPage($id)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM page WHERE idPage = $id");
        return $reponse->fetch($db::FETCH_ASSOC);
    }





    public Function NbrPage(){
        $db = $this->db;

        $reponse = $db->query("SELECT COUNT(*) FROM page");
        return $reponse->fetch($db::FETCH_ASSOC)["COUNT(*)"];
    }

    public function ajouterPage($titre,$contenu)
    {
        $db = $this->db;

        $query = $db->prepare("INSERT INTO `page`(`titre`,`contenu`,`datePublication` )
	  VALUES(:titre,:contenu,NOW())");
        return $query->execute(array(
            'titre' => $titre,
            'contenu' => $contenu,



        ));
    }

    public function modifierPage($id,$titre,$contenu){
        $db = $this->db;
        $query = $db->prepare("UPDATE article SET titre= :t, contenu =:c,image=:i WHERE page.idPage=$id");
        return $query->execute(array(

            't' => $titre,
            'c' => $contenu,

        ));

    }

}

?>