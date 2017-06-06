<?php
namespace controller;

use model\Article;

class Router{
    public function __construct()
    {
        require "./config/config.php";

        if(isset($_GET["url"]) && strlen($_GET["url"])>0)
            $route = explode("/", $_GET["url"]);
        else
            $route = array('acceuil');


        ob_start();

        switch ($route[0]){
            case 'acceuil' :{
                require './view/home-jumbotron.php';

                $articles = new ArticleController();
                $articles = $articles->indexArticle();
                break;
            }
            case 'actualites' :{
                if(isset($route[1]) && $route[1] > 0){
                    $item = new ArticleController();
                    $item->showArticle(intval($route[1]));
                }else{
                    if (isset($_GET['start']))
                        $start = intval($_GET['start']);
                    else
                        $start = 0;

                        $news = new ArticleController();
                        $news->actualitesArticle($start);



                }
                break;
            }
            case 'replay' :{
             $emission = new EmissionController();
             $emission->showEmission();
                break;
            }
            case 'grille' :{


               $programme = new ProgrammeController();
               $programme->showProgramme();


            }
            case 'direct' :{

                require './view/live.php';
                break;
            }
            case 'contact' :{
                require './view/contact.php';
                break;
            }
            case 'recherche' :{

                require './view/search.php';
                break;
            }
            case 'page' :{
                if(isset($route[1]) && $route[1] > 0){
                    $page = new \controller\PageContoller();
                    $page->showPage(intval($route[1]));
                }else{
                    header("Location: $repertory/404");
                }
                break;
            }
            case '404' :{
                require './view/404.php';
                break;
            }

            default :{
                header("Location: $repertory/404");
                break;
            }


        }
        $listePage = new \model\Page();
        $listePage = $listePage->getAllPage();
        $content = ob_get_clean();
        require './view/template.php';
    }
}