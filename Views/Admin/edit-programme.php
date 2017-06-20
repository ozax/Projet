<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Programmes</h3>
    </div>
    <div class="panel-body">
        <form method='POST' action=''>
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Ajouter un programme</div></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Le titre de l'émission à  ajouter :</label>
                    <input type="text" value="<?php if(isset($_SESSION['programme']['sujet'])) echo $_SESSION['programme']['sujet']; ?> " name='sujet' class="form-control" placeholder="Titre" required>
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
                    <input type="time" value="<?php if(isset($_SESSION['programme']['heurDebut'])) echo $_SESSION['programme']['heurDebut']; ?> " name='heurDebut' class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Heure-Fin :</label>
                    <input type="time" value="<?php if(isset($_SESSION['programme']['heurFin'])) echo $_SESSION['programme']['heurFin']; ?> " name='heurFin' class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Animateur:</label>
                    <input type="text" value="<?php if(isset($_SESSION['programme']['animateur'])) echo $_SESSION['programme']['animateur']; ?> " name='animateur' class="form-control" placeholder="animateur" required>
                </div>
                <div class="form-group">
                    <label>La description :</label>
                    <textarea name='description'  class="form-control tinymce" placeholder="Contenu"> <?php if(isset($_SESSION['programme']['description'])) echo $_SESSION['programme']['description']; ?> </textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    <a href='index.html' class="btn btn-danger">Annuler</a>
                </div>
        </form>
    </div>
</div>
<?php require "./Views/Admin/footer.php"; ?>