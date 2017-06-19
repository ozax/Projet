<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Pages</h3>
    </div>
    <div class="panel-body">
        <form method='POST' action="">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Ajouter une page</div></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Le titre :</label>
                    <input type="text" value="<?php if (isset(  $_SESSION['page']['titre']))echo $_SESSION['page']['titre']?> " name='titre' class="form-control" placeholder="Titre" required>
                </div>
                <div class="form-group">
                    <label>Le contenu :</label>
                    <textarea name='contenu'  class="form-control tinymce" placeholder="Contenu"> <?php if (isset(  $_SESSION['page']['contenu']))echo $_SESSION['page']['contenu']?></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" name='bpage' class="btn btn-primary">Sauvegarder</button>
                    <a href='index.html' class="btn btn-danger">Annuler</a>
                </div>
            </div>
        </form>

    </div>
</div>
<?php
unset($_SESSION['page']);
require "./Views/Admin/footer.php"; ?>