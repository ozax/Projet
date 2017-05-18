<?php

namespace Controller\Admin;
session_start();
class Post {

    public function __construct()
    {

                if ($_GET["post"] == "article")
                {
                        $post = new \controller\Admin\ArticleControllerAdmin();
                    $post->ajouterArticle();
                }

            else if (isset($_GET["update"])) {
                if ($_GET["update"] == "article") {
                    if (isset($_GET["id"])) {
                        $post = new \controller\Admin\ArticleControllerAdmin();
                        $post->modifierArticle();
                    }
                }
            }

            else if (isset($_GET["delete"]))
            {
                if ($_GET["delete"] == "article")
                {
                    $post = new \controller\Admin\ArticleControllerAdmin();
                    $post->supprimerArticle();
                }

            }

        }


}
