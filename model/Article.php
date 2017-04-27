<?php

namespace model;


class Article{

    private $idArticle;
    private $title;
    private $image;
    private $content;
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

}

?>