<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Articles</h3>
    </div>
    <div class="panel-body">
        <?php
        $msg = new \Services\FlashMessages();
        if (isset($msg))
            $msg->display();
        ?>
        <table id="example" class="table table-striped table-bordered" cellspacing="0">
            <thead> <tr>
                <th >Titre</th>
                <th width="100px">Publié le)</th>
                <th width="120px">Action</th>
            </tr></thead>
            <?php foreach($article as $article): ?>
            <tr>
                <td><?=$article["titre"]?></td>
                <td><?=substr($article['datePublication'],0,10)?> à <?=substr($article['datePublication'],10,6)?></td>
                <td>
                    <a class="btn btn-default" href="<?=$repertory?>/admin/articles/edit/<?=$article["idArticle"]?>" >
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a class="btn btn-danger"  data-toggle="modal" data-target="#sarticle<?=$article["idArticle"]?>">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>

                <div class="modal fade" id="sarticle<?=$article["idArticle"]?>" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <!-- Le contenu du modal-->
                        <div class="modal-content">
                            <form methode='post' action='suparticle.php' enctype="multipart/form-data">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer un article</div></h4>
                                </div>
                                <div class="modal-body">
                                    <h1 class="h11"><b> Êtes-vous sûr de vouloir continuer ? </b> </h1>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                        <a href="<?=$repertory?>/admin/articles/delete/<?=$article["idArticle"]?>" type="submit" name='barticle' class="btn btn-danger">Supprimer</a>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </table>
    </div>
</div>


<?php require "./Views/Admin/footer.php"; ?>
