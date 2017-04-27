<?php

namespace model;


class Page{

    private $id;
    private $title;
    private $content;
    private $date;
    private $db;

    public function __construct()
    {
        $this->db = new \engine\Connect();
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

}

?>