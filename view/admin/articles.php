<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Articles</h3>
    </div>
    <div class="panel-body">
        <table id="example" class="table table-striped table-bordered" cellspacing="0">
            <thead> <tr>
                <th>Titre :</th>
                <th>Publié par :</th>
                <th>Publié le :</th>
                <th>Action :</th>
            </tr></thead>
            <?php foreach($article as $article): ?>
            <tr>
                <td><?=$article["titre"]?></td>
                <td></td>
                <td><?=$article["datePublication"]?></td>
                <td><a class="btn btn-default" href="./admin.php?p=articles&edit='<?=$article["idArticle"]?>" <abbr title='Modifier'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></abbr></a> <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#myModal='<?$article["idArticle"]?><abbr title='Supprimer'<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></abbr></a></td>
            </tr>
            <?php endforeach; ?>

        </table>
    </div>
</div>