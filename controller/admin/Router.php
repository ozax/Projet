<?php
namespace controller\admin;




use model\Article;

class Router{
    public function __construct()
    {
        require "./config/config.php";

        if(isset($_GET["p"]) && strlen($_GET["p"]))
            $p = $_GET["p"];
        else
            $p = 'tableau-de-bord';



        ob_start();

        switch ($p){
            case 'tableau-de-bord' :{
                $dashaboard = new DashboardControllerAdmin();
                $dashaboard->showHome();


                break;
            }
            case 'articles' :{
                if(isset($_GET['edit'])){
                    if(isset($_GET['id'])){
                        $article = new ArticleControllerAdmin();
                        $article->ajouterArticle();


                    }else {



                        require './view/admin/edit-article.php';


                    }
                }else{
                    $article= new ArticleControllerAdmin();
                    $article->showArticle();



                }


                break;
            }
            case 'emissions' :{
                if(isset($_GET['edit'])){
                    if(isset($_GET['id'])){

                        require './view/admin/edit-emission.php';
                    }else {
                        require './view/admin/edit-emission.php';
                    }
                }else{
                    $emission = new EmissionControllerAdmin();
                    $emission->showEmission();

                }


                break;
            }
            case 'programmes' :{
                if(isset($_GET['edit'])){
                    if(isset($_GET['id'])){
                        require './view/admin/edit-programme.php';
                    }else {
                        require './view/admin/edit-programme.php';
                    }
                }else{

                    $programme = new ProgrammeControllerAdmin();
                    $programme->showProgramme();
                }


                break;
            }
            case 'pages' :{
                if(isset($_GET['edit'])){
                    if(isset($_GET['id'])){
                        require './view/admin/edit-page.php';
                    }else {
                        require './view/admin/edit-page.php';
                    }
                }else{
                  $page = new PageControllerAdmin();
                  $page = $page->showAllPage();
                }


                break;
            }
            case 'messages' :{
                require './view/admin/messages.php';
                break;
            }

             case 'editeurs' :{
            if(isset($_GET['edit'])){
                if(isset($_GET['id'])){
                    require './view/admin/add-editeur.php';
                }else {
                    require './view/admin/add-editeur.php';
                }
            }else{
                $editeur = new EditeurControllerAdmin();
                $editeur->showEditor();

            }


            break;
        }





        }







        $content = ob_get_clean();
        require './view/admin/template.php';
    }
}