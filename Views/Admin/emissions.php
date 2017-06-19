<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Emissions</h3>

    </div>
    <div class="liste-jours">
        <ul class="list-unstyled list-inline">
            <li>Choisir le jour :</li>
            <li class="active"><a href="#">Samedi</a></li>
            <li>|</li>
            <li><a href="#">Dimanche</a></li>
            <li>|</li>
            <li><a href="#">Lundi</a></li>
            <li>|</li>
            <li><a href="#">Mardi</a></li>
            <li>|</li>
            <li><a href="#">Mercredi</a></li>
            <li>|</li>
            <li><a href="#">Jeudi</a></li>
            <li>|</li>
            <li><a href="#">Vendredi</a></li>
        </ul>
    </div>
    <div class="panel-body">
        <?php
        $msg1 = new \Services\FlashMessages();
        if (isset($msg1))
            $msg1->display();
        ?>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" cellspacing="0">
                <thead><tr>
                    <th>Titre :</th>
                    <th>Heure-Debut :</th>
                    <th>Heure-Fin :</th>
                    <th>Présentée par :</th>
                    <th>Ajoutée par :</th>
                    <th>Action :</th>
                </tr></thead>
                <?php foreach ($emission as $emission):?>
                <tr>
                    <td><?=$emission["sujet"]?></td>
                    <td><?=$emission["heurDebut"]?></td>
                    <td><?=$emission["heurFin"]?></td>
                    <td><?=$emission["animateur"]?></td>
                    <td></td>
                    <td><a class="btn btn-default" href="<?=$repertory?>/admin/emissions/edit/<?=$emission["idProgramme"]?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#semission"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
                <?php endforeach;?>

            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="semission<?=$emission["idProgramme"]?>" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <!-- Le contenu du modal-->
        <div class="modal-content">
            <form methode='post' action='suparticle.php' enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer une Emission</div></h4>
                </div>
                <div class="modal-body">
                    <h1 class="h11"><b> Êtes-vous sûr de vouloir continuer ? </b> </h1>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="submit" name='barticle' class="btn btn-danger">Supprimer</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<?php require "./Views/Admin/footer.php"; ?>