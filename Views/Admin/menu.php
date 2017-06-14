<div class="list-group">
    <a href="./admin.php?p=tableau-de-bord" class="list-group-item active main-color-bg">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Tableau de bord
    </a>
    <a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="glyphicon glyphicon-pencil icon" aria-hidden="true"></span> Articles <span class="glyphicon glyphicon-menu-down badge2" aria-hidden="true"></span></a>
    <div class="collapse" id="collapseExample">
        <a href="<?=$repertory ?>/admin/articles" id="collapseExample" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-list icon2" aria-hidden="true"></span> Liste des articles</a>
        <a href="<?=$repertory ?>/admin/articles/add" id="collapseExample" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-plus icon2" aria-hidden="true"></span> Ajouter un article</a>
    </div>
    <a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><span class="icon"><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></span> Emissions<span class="glyphicon glyphicon-menu-down badge2" aria-hidden="true"></span></a>
    <div class="collapse" id="collapseExample2">
        <a href="<?=$repertory ?>/admin/emissions" id="collapseExample2" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-list icon2" aria-hidden="true"></span> Liste des emissions</a>
        <a href="<?=$repertory ?>/admin/emissions/add" id="collapseExample2" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-plus icon2" aria-hidden="true"></span> Ajouter une emission</a>
    </div>
    <a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3"><span class="icon"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span> Programmes<span class="glyphicon glyphicon-menu-down badge2" aria-hidden="true"></span></a>
    <div class="collapse" id="collapseExample3">
        <a href="<?='?p=programmes' ?>" id="collapseExample3" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-list icon2" aria-hidden="true"></span> Liste des programmes</a>
        <a href="<?='?p=programmes&edit' ?>" id="collapseExample3" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-plus icon2" aria-hidden="true"></span> Ajouter un programme</a>
    </div>
    <a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4"><span class="icon"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></span> Pages<span class="glyphicon glyphicon-menu-down badge2" aria-hidden="true"></span></a>
    <div class="collapse" id="collapseExample4">
        <a href="<?='?p=pages' ?>" id="collapseExample4" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-list icon2" aria-hidden="true"></span> Liste des pages</a>
        <a href="<?='?p=pages&edit' ?>" id="collapseExample4" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-plus icon2" aria-hidden="true"></span> Ajouter une page</a>
    </div>
    <a class="list-group-item" role="button" data-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample5"><span class="icon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span> Editeurs<span class="glyphicon glyphicon-menu-down badge2" aria-hidden="true"></span></a>
    <div class="collapse" id="collapseExample5">
        <a href="<?='?p=editeurs' ?>" id="collapseExample5" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-list icon2" aria-hidden="true"></span> Liste des editeurs</a>
        <a href="<?='?p=editeurs&edit' ?>" id="collapseExample5" class="collapse list-group-item liste2"><span class="glyphicon glyphicon-plus icon2" aria-hidden="true"></span> Ajouter un editeur</a>
    </div>
    <a href="<?='?p=messages' ?>" class="list-group-item"><span class="icon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span> Messages </span></a>
</div>