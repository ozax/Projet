<?php

namespace controller;


class PageContoller
{
    public function showPage($id){
        $page = new \model\Page();
        $page = $page->getPage($id);
        require 'view/page.php';
    }
}