<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Emissions</h3>
    </div>
    <div class="panel-body">
        <form method='POST' action="">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> Ajouter une Emission</div></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Le titre :</label>
                    <input type="text" value="" name='sujet' class="form-control" placeholder="Titre" required>
                </div>
                <div class="form-group">
                    <label>Jour de semaine :</label>
                    <select class="form-control" name="jour">
                        <option>Samedi</option>
                        <option>Dimanche</option>
                        <option>Lundi</option>
                        <option>Mardi</option>
                        <option>Mercredi</option>
                        <option>Jeudi</option>
                        <option>Vendredi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Heure-Debut :</label>
                    <input type="time" value="" name='heurDebut' class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Heure-Fin :</label>
                    <input type="time" value="" name='heurFin' class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Animateur:</label>
                    <input type="text" value="" name='animateur' class="form-control" placeholder="animateur" required>
                </div>
                <div class="form-group">
                    <label for="audio"><span class="glyphicon glyphicon-headphones icon" aria-hidden="true"></span> le fichier audio :</label>
                    <input type="file" name="Fichier" id="audio"/>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label>La description :</label>
                        <textarea name="description"  class="form-control tinymce" placeholder="Contenu" ></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary">Sauvegarder</button>
                        <a href='index.html' class="btn btn-danger">Annuler</a>
        </form>
    </div>
</div>
</div>
</div>
</div>
<?php require "./Views/Admin/footer.php"; ?>