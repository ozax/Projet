<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Pages</h3>
    </div>
    <div class="panel-body">
        <?php
        $msg6 = new \Services\FlashMessages();
        if (isset($msg6))
            $msg6->display();
        ?>
        <table id="example" class="table table-striped table-bordered" cellspacing="0">
            <thead> <tr>
                <th>Titre :</th>
                <th>Date de publication :</th>
                <th>Action :</th>
            </tr></thead>
            <?php foreach ($page as $page):?>
            <tr>
                <td><?=$page["titre"]?></td>
                <td><?=$page["datePublication"]?></td>
                <td><a class="btn btn-default" href="<?=$repertory?>/admin/pages/edit/<?=$page["idPage"]?>"><abbr title='Modifier'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></abbr></a>
                    <a class="btn btn-danger" data-toggle="modal" data-target="#spage<?=$page["idPage"]?>"><abbr title='Supprimer'<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></abbr></a></td>
            </tr>
            <div class="modal fade" id="spage<?=$page["idPage"]?>" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <!-- Le contenu du modal-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer une Emission</div></h4>
                        </div>
                        <div class="modal-body">
                            <h1 class="h11"><b> Êtes-vous sûr de vouloir continuer ? </b> </h1>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                <a href="<?=$repertory?>/admin/pages/delete/<?=$page["idPage"]?>" class="btn btn-danger">Supprimer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

        </table>
    </div>



<?php require "./Views/Admin/footer.php"; ?>