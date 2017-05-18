<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Programmes</h3>
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
        <table id="example" class="table table-striped table-bordered responsive" cellspacing="0">
            <thead><tr>
                <th>Titre :</th>
                <th>Date de création :</th>
                <th>Heure-Debut :</th>
                <th>Heure-Fin :</th>
                <th>Action :</th>
            </tr></thead>
            <?php foreach ($programme as $programme):?>
                <tr>
                    <td><?=$programme["sujet"]?></td>
                    <td><?=$programme["datePublication"]?></td>
                    <td><?=$programme["heurDebut"]?></td>
                    <td><?=$programme["heurFin"]?></td>
                    <td><a class="btn btn-default" href="./admin.php?p=programmes&edit='<?=$programme["idProgramme"]?>"><!--en cliquant sure le bouton ,la page de modification (qui est la méme que la page d'ajout) va s'afficher avec un formulaire en affichant les ancien champs déja remplits  --><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <a class="btn btn-danger" data-toggle="modal" data-target="#sprogramme"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
            <?php endforeach;?>




        </table>
    </div>
</div>