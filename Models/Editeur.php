<?php

namespace Models;
use Services\Connect;

class Editeur
{
    private $idEditeur;
    private $nom;
    private $prenom;
    private $email;
    private $motDePasse;

    public function __construct()
    {
        $this->db = new Connect();
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
        $query = $db->prepare ("INSERT INTO Editeur(nom, prenom, email, motDePasse) VALUES (:nom, :prenom, :email, 123)");
        return $query->execute (array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email

        ));
    }


        public function deleteEditeur($id){
        $db = $this->db;
        $query = $db->prepare("DELETE FROM `editeur` WHERE `editeur`.`idEditeur` =:id");
        return $query->execute(array(
            'id'=>$id
        ));
    }


    public Function NbrEditeur(){
        $db = $this->db;

        $reponse = $db->query("SELECT COUNT(*) FROM editeur");
        return $reponse->fetch($db::FETCH_ASSOC)["COUNT(*)"];
    }

    public function getLogin($email, $pass){
        $db = $this->db;
        $reponse = $this->db->query("SELECT (idEditeur) FROM Editeur WHERE email = '$email' AND motDePasse = '$pass'");
        // SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
        return $reponse->fetch($db::FETCH_ASSOC);
    }

}