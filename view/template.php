<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Radio Soummam</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
    <link href="<?=$repertory ?>/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$repertory ?>/static/css/main.css?version=5" rel="stylesheet">
</head>



<header>
    <div class="container">
        <a href="#">
            <div class="logo">
                <img class="pull-left" src="<?=$repertory ?>/static/images/logo-69x71.png" alt="Logo radio Soummam" />
                <div class="pull-left">
                    <h1>RADIO SOUMMAM</h1>

                    <i>Yidwen, yal ass</i>
            </div>
        </a>
        <div class="phone navbar-right hidden-sm hidden-xs">
            <ul class="list-inline">
                <li>
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><br />
                </li>
                <li><a href="tel:+21334219998">(+213) 34 21 99 98</a></li>
            </ul>
        </div>
        <div>
            <form class="visible-sm navbar-right navbar-form navbar-left inline-form search-sm-soummam" role="search">
                <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Recherche...">
                    <span class="input-group-btn">
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                </div>
            </form>
        </div>


    </div>
</header>


<nav class="navbar navbar-soummam">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle menu-bt-soummam" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?=$repertory ?>/acceuil">Acceuil</a></li>
                <li><a href="<?=$repertory ?>/actualites">Actualités</a></li>
                <li><a href="<?=$repertory ?>/replay">Replay</a></li>
                <li><a href="<?=$repertory ?>/grille">Grille des programme</a></li>
                <li><a href="<?=$repertory ?>/direct">Direct</a></li>
                <li><a href="<?=$repertory ?>/contact" class="rightborder">Contactez-nous</a></li>
            </ul>
            <form method="post" action="<?=$repertory ?>/recherche" class="hidden-sm navbar-form navbar-left inline-form search-soummam" role="search">
                <div class="form-group input-group">
                    <input type="text" class="form-control" placeholder="Recherche...">
                    <span class="input-group-btn">
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                </div>
            </form>
        </div>
    </div>
</nav>

<?= $content ?>

<div class="container-fluid footer">
    <div class="container footer-pages">
        <?php
        for ($i = 0 ; $i < count($listePage) ; $i++){

            if($i % 4 == 0){
                echo '<div class="row">';
            }
            if($i % 2 == 0){
                echo '<div class="col-md-6"><div class="row">';
            }
            echo '
                    <div class="col-sm-6">
                        <p>- <a class="page-url" href="'. $repertory  .'/page/' . $listePage[$i]["idPage"] .'/'. str_replace(' ', '-', $listePage[$i]["titre"]) . '">' . $listePage[$i]["titre"] . '</a></p>
                    </div>
                ';
            if($i % 2 == 1){
                echo '</div></div>';
            }
            if($i % 4 == 3){
                echo '</div>';
            }

        }
        if(count($listePage)%4 != 0){
            echo'</div></div></div>';
        }
        ?>



    </div>

    <div class="container footer-soummam">
        <div class="row">

            <div class="col-sm-6 footer-logo">
                <a href="#">
                    <img class="pull-left" src="<?=$repertory ?>/static/images/logo-55x56.png" alt="Logo radio Soummam" />
                    <div class="pull-left">
                        <h1>RADIO SOUMMAM</h1>
                        <i>Yidwen, yal ass</i>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 socials">
                <a class="pull-right" href="#"><img src="<?=$repertory ?>/static/images/icon-youtube.svg" alt="icon youtube" /></a>

                <a class="pull-right" href="#"><img src="<?=$repertory ?>/static/images/icon-facebook.svg" alt="icon facebook" /></a>

                <p class="pull-right">Nous suivre :</p>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid footer-copyright">
    <p class="text-center">© Radio soummam - Tous droits réservés</p>
</div>


<script src="<?=$repertory ?>/static/js/jquery.min.js"></script>
<script src="<?=$repertory ?>/static/js/bootstrap.min.js"></script>
</body>

</html>