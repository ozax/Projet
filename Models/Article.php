<?php

namespace Models;


use Services\Connect;

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
        $this->db = new Connect();
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

    public function searchArticle($key)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM article WHERE titre LIKE '%$key%'");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public Function NbrArticle(){
        $db = $this->db;

        $reponse = $db->query("SELECT COUNT(*) FROM article");
        return $reponse->fetch($db::FETCH_ASSOC)["COUNT(*)"];
    }
    public function ajouterArticle($titre,$contenu,$image)
    {
        $db = $this->db;

        $query = $db->prepare("INSERT INTO `article`(`titre`,`contenu`,`image`,`datePublication`  )
	  VALUES(:titre,:contenu,:image,NOW())");
        return $query->execute(array(
            'titre' => $titre,
            'contenu' => $contenu,
            'image'=>$image,


        ));
    }

    public function modifierArticle($id,$titre,$contenu,$image){
        $db = $this->db;
        $query = $db->prepare("UPDATE article SET titre= :t, contenu =:c,image=:i WHERE article.idArticle=$id");
        return $query->execute(array(

            't' => $titre,
            'c' => $contenu,
            'i'=>$image,
        ));

    }

    public function deleteArticle($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `article` WHERE `article`.`idArticle` =:id");
        return $query->execute(array(
			'id'=>$id
			));
    }

}

?>