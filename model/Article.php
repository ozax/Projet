<?php

namespace model;


class Article{

    private $idArticle;
    private $titre;
    private $image;
    private $contenu;
    private $datePublication;
    private $idEditeur;
    private $db;

    public function __construct()
    {
        $this->db = new \engine\Connect();
        $this->db = $this->db->getPdo();
    }

    public function getAllArticle()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM article ORDER BY idArticle DESC");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function getLatestArticle()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM article ORDER BY idArticle DESC LIMIT 6");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function getArticle($id)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM article WHERE idArticle = $id");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public Function NbrArticle(){
        $db = $this->db;

        return  $this->db->exec("SELECT COUNT(*) FROM article");
    }
    public function ajouterArticle($titre,$contenu,$image,$date,$idEditeur)
    {
        $db = $this->db;

        $query = $db->prepare("INSERT INTO `article`(`titre`,`contenu`,`image`,`datePublication`,`idEditeur`)
	  VALUES(:titre,:contenu,:image,:date)");
        return $query->execute(array(
            'titre' => $titre,
            'contenu' => $contenu,
            'image'=>$image,
            'date' => $date,
            'idEditeur'=> $idEditeur
        ));
    }

    public function modifierArticle($id,$titre,$contenu,$image,$date,$idEditeur){
        $db = $this->db;
        $query = $db->prepare("UPDATE article SET titre= :t, contenu =:c,image=:i,
	          datePublication =:d, idEditeur=:ie WHERE article.idArticle=$id");
        return $query->execute(array(

            't' => $titre,
            'c' => $contenu,
            'i'=>$image,
            'd' =>$date,
            'ie'=> $idEditeur
        ));

    }

    public function deleteArticle($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `article` WHERE `article`.`idArticle` =:id LIMIT 1");
        return $query->execute(array('id'=>$id));
    }

}

?>