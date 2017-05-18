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
                    <td><h1></h1><?=$emission["sujet"]?><h1/></td>
                    <td><?=$emission["heurDebut"]?></td>
                    <td><?=$emission["heurFin"]?></td>
                    <td><?=$emission["animateur"]?></td>
                    <td></td>
                    <td><a class="btn btn-default" href="./admin.php?p=emissions&edit='<?=$emission["idProgramme"]?>"><!--en cliquant sure le bouton ,la page de modification (qui est la méme que la page d'ajout) va s'afficher avec un formulaire en affichant les ancien champs déja remplits  --><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <a class="btn btn-danger" data-toggle="modal" data-target="#semission"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
                <?php endforeach;?>

            </table>
        </div>
    </div>
</div>