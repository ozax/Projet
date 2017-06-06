<?php

namespace model;

class Editeur
{
    private $idEditeur;
    private $nom;
    private $prenom;
    private $email;
    private $motDePasse;

    public function __construct()
    {
        $this->db = new \engine\Connect();
        $this->db = $this->db->getPdo();
    }

    public function getEditeur($id){
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM Editeur WHERE idEditeur = $id");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function getAllEditeur()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM Editeur");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }
    public function ajouterEditeur($nom, $prenom, $email)
    {
        $db = $this->db;
        $query = $db->prepare("INSERT INTO Editeur(nom, prenom, email, motDePasse='123') VALUES (:nom, :prenom, :email)");
        return $query->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,

        ));
    }

    public Function NbrEditeur(){
        $db = $this->db;

        $reponse = $db->query("SELECT COUNT(*) FROM editeur");
        return $reponse->fetch($db::FETCH_ASSOC)["COUNT(*)"];
    }

}