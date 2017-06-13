<?php

namespace Models;

use Services\Connect;

class Message
{
    private $idMessage;
    private $nomExpditeur;
    private $emailExpditeur;
    private $objet;
    private $contenu;
    private $dateEnvoie;
    private $db;

    public function __construct()
    {
        $this->db = new Connect();
        $this->db = $this->db->getPdo();
    }

    public function AllMessage()
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM message");
        return $reponse->fetchAll($db::FETCH_ASSOC);
    }

    public function envoieMessage($nomExpditeur, $emailExpditeur, $objet , $contenu)
    {
        $db = $this->db;
        $query = $db->prepare("INSERT INTO message(nomExpditeur,emailExpditeur,objet,contenu,dateEnvoie) VALUES (:nomExpditeur,:emailExpditeur,:objet,:contenu,NOW())");
        return $query->execute(array(
            'nomExpditeur' => $nomExpditeur,
            'emailExpditeur' => $emailExpditeur,
            'objet' => $objet,
            'contenu' => $contenu
        ));
    }

    public function repondreMessage($nomExpditeur, $emailExpditeur, $objet, $contenu, $dateEnvoie)
    {
        $db = $this->db;
        $query = $db->prepare("INSERT INTO message(nomExpditeur,emailExpditeur,objet,contenu,dateEnvoie) VALUES (:nomExpditeur,:emailExpditeur,:objet,:contenu,:dateEnvoie)");
        return $query->execute(array('nomExpditeur' => $nomExpditeur, 'emailExpditeur' => $emailExpditeur,
            'objet' => $objet, 'contenu' => $contenu, 'dateEnvoie' => $dateEnvoie));
    }

    public function consulterMessage($id)
    {
        $db = $this->db;
        $reponse = $this->db->query("SELECT * FROM message WHERE idMessage= $id");
        return $reponse->fetch($db::FETCH_ASSOC);
    }

    public function supprimerMessage($id)
    {
        $db = $this->db;
        $query = $db->prepare("DELETE FROM message WHERE `idMessage`=:id");
        return $query->execute(array('id' => $id));
    }


    public Function NbrMessage()
    {
        $db = $this->db;

        $reponse = $db->query("SELECT COUNT(*) FROM message");
        return $reponse->fetch($db::FETCH_ASSOC)["COUNT(*)"];
    }

}

?>