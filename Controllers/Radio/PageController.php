<?php
namespace Controllers\Radio;

use Models\Page;

class PageController{
    /**
     *
     */
    public function footer(){
        require "./config/config.php";
        $listePage = new Page();
        $listePage = $listePage->getAllPage();
        require "./Views/Radio/footer.php";
    }

    public function showPage($id){
        $page = new Page();
        $page = $page->getPage($id);
        require 'Views/Radio/page.php';
    }
}