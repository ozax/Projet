<?php
namespace controller\admin;


use model\Article;
use model\Page;

class DashboardControllerAdmin {
    public function showHome() {
        $articleObj = new Article();
        $nbrArticle = $articleObj->NbrArticle();
        

        require './view/admin/tableau-de-bord.php';

    }
}