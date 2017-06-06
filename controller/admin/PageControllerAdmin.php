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

    public function ajouterPage()
    {
        if (isset($_POST["titre"])) {

            $page = new Page();
            $page = $page->ajouterPage (htmlspecialchars ($_POST["titre"]), $_POST["contenu"]);

        }
require './view/admin/edit-page.php';
    }





}