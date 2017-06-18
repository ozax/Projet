<?php require "./config/config.php"; ?>
<!DOCTYPE html>
<!-- Page d'accueil -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Espace Administratif</title>
    <!-- Css de  Bootstrap-->
    <link href="<?=$repertory?>/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$repertory?>/static/datatable/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=$repertory?>/static/css/main.admin.css?version=2" rel="stylesheet">
</head>
<body>
<div id="custom-bootstrap-menu" class="navbar-default " role="navigation">
    <div class="container">
        <div class="navbar-header"><a class="navbar-brand" href="<?=$repertory?>/admin"> Espace Administratif</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <!-- partie afficher uniquement sure portable -->
            <ul class="nav navbar-nav hidden-lg hidden-md hidden-sm">
                <li><a href="?p=programmes&edit"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil</a>
                </li>
                <li><a href="?p=articles&edit">Articles</a>
                </li>
                <li><a href="?p=emissions&edit">Emissions</a>
                </li>
                <li><a href="?p=programmes&edit">Programmes</a>
                </li>
                <li><a href="?p=pages&edit">Pages</a>
                </li>
                <li><a href="?p=editeurs&edit">Editeurs</a>
                </li>
                <li><a href="?p=messages&edit">Messages</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left hidden-xs">
                <li><a href="<?=$repertory?>/admin"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil</a>
                <li><a href="?p=messages&edit"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Messages</a>
                <li><a target="_blank" href="<?=$repertory?>"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Aller vers le site</a>
                </li></ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a>Bienvenue, Brad <!-- le Nom de l'éditeur ou l'dministrateur --></a></li>
                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="caret"></span> <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <span>Profil</span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="./admin.php?p=profile"><span class="glyphicon glyphicon-pencil"></span> Modifier Profil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=$repertory?>/logout"><span class="glyphicon glyphicon-off red"></span> Se deconnecter</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!--/.nav-collapse -->
</div>
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Gestion  <small> du site </small></h1>
            </div>
            <div class="col-md-2">
                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="glyphicon glyphicon-plus icon" aria-hidden="true"></span> Ajouter du contenu
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="<?=$repertory?>/admin/articles">Article</a>
                        </li>
                        <li><a href="<?=$repertory?>/admin/emissions">Emission</a>
                        </li>
                        <li><a href="<?=$repertory?>/admin/programmes">Programme</a>
                        </li>
                        <li><a href="<?=$repertory?>/admin/pages">Page</a>
                        </li>
                        <li><a href="<?=$repertory?>/admin/editeurs">Editeur</a>
                        </li>
                        <li><a href="<?=$repertory?>/admin/messages">Message</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active"><span class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></span> Tableau de bord</li>
        </ol>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-xs">
                <?php require 'menu.php'; ?>


            </div>
            <div class="col-md-9">