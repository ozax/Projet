<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Editeurs</h3>
    </div>

    <div class="panel-body">
        <table id="example" class="table table-striped table-bordered responsive" cellspacing="0">
            <thead><tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>E-mail</th>
                <th>Action :</th>
            </tr></thead>
            <?php foreach ($editeur as $editeur):?>
            <tr>
                <td><?=$editeur["nom"]?></td>
                <td><?=$editeur["prenom"]?></td>
                <td><?=$editeur["email"]?></td>
                <td><a class="btn btn-default" href=./admin.php?p=editeurs&edit='<?=$editeur["idEditeur"]?>"><!--en cliquant sure le bouton ,la page de modification (qui est la méme que la page d'ajout) va s'afficher avec un formulaire en affichant les ancien champs déja remplits  --><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <a class="btn btn-danger" data-toggle="modal" data-target="#sediteur"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td></tr>
            <?php endforeach;?>
        </table>
    </div>
</div>