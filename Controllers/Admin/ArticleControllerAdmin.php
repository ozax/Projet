<?php


namespace Controllers\Admin;



class ArticleControllerAdmin
{



    public function showArticle(){
        require "./config/config.php";

        $article = new Article();
       $article = $article->getAllArticle();



        require './view/admin/articles.php';


    }

    public function ajouterArticle(){
        if (isset($_POST["titre"])){
            $article = new Article();
            $article = $article->ajouterArticle (htmlspecialchars ($_POST["titre"]), $_POST["contenu"], htmlspecialchars ($_POST["image"]));
        }

        require './view/admin/edit-article.php';


    }

    public function modifierArticle(){

        $article = new Article();
        $article = $article->modifierArticle($_GET["idArticle"],$_POST["titre"],$_POST["image"],$_POST["contenu"],$_POST["datePublication"],$_POST["idEditeur"]);

    }
    public function supprimerArticle(){

        $article = new Article();
        $article = $article->deleteArticle($_GET["idArticle"]);
    }



}