<?php
namespace controller\admin;




use Controller\EmissionController;
use controller\PageContoller;
use model\Article;
use model\Editeur;

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
                $message = new MessageControllerAdmin();
                $message = $message->showAllmessages();


                break;
            }
            case 'articles' :{
                if(isset($_GET['edit'])){
                    if(isset($_GET['id'])){


                    }else {
                        $article = new ArticleControllerAdmin();
                        $article->ajouterArticle ();
break;
                    }
                }else{
                    $article= new ArticleControllerAdmin();
                    $article->showArticle();



                }


                break;
            }
            case 'profile':{
                require './view/admin/profile.php';
                break;
            }
            case 'emissions' :{
                if(isset($_GET['edit'])){
                    if(isset($_GET['id'])){


                    }else {
                       $emission = new EmissionControllerAdmin();
                       $emission->ajouterEmission ();
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
                       $page = new PageControllerAdmin();
                       $page->ajouterPage ();
                    }
                }else{
                  $page = new PageControllerAdmin();
                  $page = $page->showAllPage();
                }


                break;
            }
            case 'messages' :{
              $message = new MessageControllerAdmin();
              $message = $message->showAllmessages();
                break;
            }





             case 'editeurs' :{
            if(isset($_GET['edit'])){
                if(isset($_GET['id'])){
                    require './view/admin/add-editeur.php';
                }else {
                   $editeur = new EditeurControllerAdmin();
                   $editeur->ajouterEditeur ();
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