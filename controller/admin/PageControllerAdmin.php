<?php

namespace Controller\Admin;

use model\Page;


class PageControllerAdmin
{


    public function showAllPage(){
        $page = new Page();
        $page = $page->getAllPage();

        require './view/admin/pages.php';
    }

    public function countPage(){

        $page = new Page();
        $page = $page->NbrPage();

        require './view/admin/tableau-de-bord.php';

    }


}