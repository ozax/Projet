<?php
/**
 * Created by PhpStorm.
 * User: Reda
 * Date: 26/04/2017
 * Time: 21:51
 */

namespace Controllers\Admin;


use Models\Article;
use Models\Editeur;
use Models\Autoload;
use Services\FlashMessages;

class ArticleControllerAdmin
{



    public function showArticle(){
        require "./config/config.php";

        $article = new Article();
       $article = $article->getAllArticle();



        require './Views/Admin/articles.php';


    }

    public function ajouterArticle(){
        if (isset($_POST["titre"])){
            $article = new Article();
            $article = $article->ajouterArticle (htmlspecialchars ($_POST["titre"]), $_POST["contenu"], htmlspecialchars ($_POST["image"]));
        }

        require './view/admin/edit-article.php';


    }

    public function editArticle($id){

        $articles = new Article($id);
        $articles = $articles->getArticle($id);
        $_SESSION['article']['titre'] = $articles['titre'];
        $_SESSION['article']['image'] = $articles['image'];
        $_SESSION['article']['contenu'] = $articles['contenu'];
        require './Views/Admin/edit-article.php';
    }

    public function postEditArticle($id){
        require "./config/config.php";

        $articles = new Article($id);
        $articles = $articles->modifierArticle($id, htmlspecialchars ($_POST["titre"]), $_POST["contenu"], htmlspecialchars ($_POST["image"]));
        $msg = new FlashMessages();
        $msg->success('L\'article a bien été modifier', $repertory.'/admin/articles');

    }

    public function deleteArticle($id){
        require "./config/config.php";
        $article = new Article();
        $article = $article->deleteArticle($id);
        $msg = new FlashMessages();
        $msg->success('L\'article a bien été supprimer', $repertory.'/admin/articles');
    }



}