<?php
namespace controller\admin;


use model\Article;
use model\Editeur;
use model\Page;

class DashboardControllerAdmin {
    public function showHome() {
        $articleObj = new Article();
        $nbrArticle = $articleObj->NbrArticle();
        
        $pageObj = new Page();
        $nbrPage = $pageObj->NbrPage();

        $editeurObj = new Editeur();
        $nbrEdit = $editeurObj->NbrEditeur();

        require './view/admin/tableau-de-bord.php';

    }


}