<?php

namespace Controllers\Admin;

use Models\Page;
use Services\FlashMessages;


class PageControllerAdmin
{


    public function showAllPage(){
        $page = new Page();
        $page = $page->getAllPage();

        require './Views/Admin/pages.php';
    }

    public function ajouterPage()
    {
        require "./config/config.php";

            $page = new Page();
            $page = $page->ajouterPage (htmlspecialchars ($_POST["titre"]), $_POST["contenu"]);
            $msg4 = new FlashMessages();
            $msg4->success('La page a bien été ajouté', $repertory.'/admin/pages');
    }





}