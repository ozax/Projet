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
        echo '<pre>';
        var_dump($p);
        echo '</pre>';
        ob_start();

        switch ($p){
            case 'tableau-de-bord' :{
                require './view/admin/tableau-de-bord.php';


                break;
            }
            case 'articles' :{
                if(isset($_GET['edit'])){
                    if(isset($_GET['id'])){
                        require './view/admin/edit-article.php';
                    }else {
                        require './view/admin/edit-article.php';
                    }
                }else{
                    require './view/admin/articles.php';
                }


                break;
            }
            case 'emissions' :{
                require './view/replay.php';
                break;
            }
            case 'programmes' :{
                require './view/grille.php';
                break;
            }
            case 'pages' :{
                require './view/live.php';
                break;
            }
            case 'messages' :{
                require './view/contact.php';
                break;
            }
            case 'editeurs' :{
                require './view/search.php';
                break;
            }
            case 'profile' :{

                break;
            }


        }
        $content = ob_get_clean();
        require './view/admin/template.php';
    }
}