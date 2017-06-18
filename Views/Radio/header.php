<?php require "./config/config.php"; ?>
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
        <a href="<?=$repertory ?>">
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
                <li class="active"><a href="<?=$repertory ?>/accueil">Accueil</a></li>
                <li><a href="<?=$repertory ?>/actualites">Actualités</a></li>
                <li><a href="<?=$repertory ?>/replay">Replay</a></li>
                <li><a href="<?=$repertory ?>/grille">Grille des programme</a></li>
                <li><a href="<?=$repertory ?>/direct">Direct</a></li>
                <li><a href="<?=$repertory ?>/contact" class="rightborder">Contactez-nous</a></li>
            </ul>
            <form method="get" action="<?=$repertory ?>/recherche" class="hidden-sm navbar-form navbar-left inline-form search-soummam" role="search">
                <div class="form-group input-group">
                    <input name="key" type="text" class="form-control" placeholder="Recherche...">
                    <span class="input-group-btn">
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                </div>
            </form>
        </div>
    </div>
</nav>