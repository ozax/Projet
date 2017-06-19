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
        $query = $db->prepare("INSERT INTO Editeur(nom, prenom, email, motDePasse) VALUES (:nom, :prenom, :email,for ($s = '', $i = 0, $z = strlen($a = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789')-1; $i != 15; $x = rand(0,$z), $s .= $a{$x}, $i++);
echo $s;)");
        return $query->execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email

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