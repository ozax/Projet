<?php
namespace Controllers\Admin;


use Models\Article;
use Models\Editeur;
use Models\Message;
use Models\Page;

class DashboardControllerAdmin {
    public function showHome() {
        $articleObj = new Article();
        $nbrArticle = $articleObj->NbrArticle();
        
        $pageObj = new Page();
        $nbrPage = $pageObj->NbrPage();

        $editeurObj = new Editeur();
        $nbrEdit = $editeurObj->NbrEditeur();

        $messageObj = new Message();
        $nbrMsg = $messageObj->NbrMessage();

        require './Views/Admin/tableau-de-bord.php';

    }


}