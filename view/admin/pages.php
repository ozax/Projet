<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Pages</h3>
    </div>

    <div class="panel-body">
        <table id="example" class="table table-striped table-bordered responsive" cellspacing="0">
            <thead><tr>
                <th>Titre</th>
                <th>Date de création</th>
                <th>Ajoutée par :</th>
                <th>Action :</th>
            </tr></thead>
               <?php foreach($page as $page):?>
            <tr>
                <td><?= $page["titre"]?></td>
                <td><?=$page["datePublication"]?></td>
                <td><?=$page["idEditeur"]?></td>
                <td><a class="btn btn-default" href="./admin.php?p=editeurs&edit='<?=$page["idPage"]?>"><!--en cliquant sure le bouton ,la page de modification (qui est la méme que la page d'ajout) va s'afficher avec un formulaire en affichant les ancien champs déja remplits  --><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <a class="btn btn-danger" data-toggle="modal" data-target="#spage"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
            </tr>
                  <?php endforeach;?>


        </table>
    </div>
</div>