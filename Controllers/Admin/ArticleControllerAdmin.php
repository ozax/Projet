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
use Services\Upload;

class ArticleControllerAdmin
{


    public function showArticle()
    {
        require "./config/config.php";

        $article = new Article();
        $article = $article->getAllArticle();


        require './Views/Admin/articles.php';


    }

    public function postArticle()
    {
        require './Views/Admin/edit-article.php';
    }


    public function postnewArticle()
    {
        require "./Config/config.php";
        $upload = new Upload();
        $upload->uploadImage("upload/images/news");

        $articles = new Article();
        $articles = $articles->ajouterArticle(htmlspecialchars($_POST["titre"]), $_POST["contenu"], "/upload/images/news/".$_FILES["image"]["name"]);

        $msg2 = new FlashMessages();
        $msg2->success('L\'article a bien été ajouté', $repertory . '/admin/articles');

    }


    public function editArticle($id)
    {

        $articles = new Article($id);
        $articles = $articles->getArticle($id);
        $_SESSION['article']['titre'] = $articles['titre'];
        $_SESSION['article']['image'] = $articles['image'];
        $_SESSION['article']['contenu'] = $articles['contenu'];
        require './Views/Admin/edit-article.php';
    }

    public function postEditArticle($id)
    {
        require "./config/config.php";

        $articles = new Article($id);
        if(!empty($_FILES["image"]["tmp_name"])){
            $upload = new Upload();
            $upload->uploadImage("upload/images/news");
            $img = "/upload/images/news/".$_FILES["image"]["name"];
        }else
        {
            $article = $articles->getArticle($id);
            $img = $article['image'];
        }

        $articles = $articles->modifierArticle($id, htmlspecialchars($_POST["titre"]), $_POST["contenu"], $img);
        $msg = new FlashMessages();
        $msg->success('L\'article a bien été modifié', $repertory . '/admin/articles');

    }

    public function deleteArticle($id)
    {
        require "./config/config.php";
        $article = new Article();
        $article = $article->deleteArticle($id);
        $msg = new FlashMessages();
        $msg->success('L\'article a bien été supprimer', $repertory . '/admin/articles');
    }


}