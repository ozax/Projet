<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Editeurs</h3>
    </div>
    <div class="panel-body">
        <form method="post"  >
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Ajouter un Editeur</div></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nom :</label>
                    <input type="text" name='nom' class="form-control" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <label>Prenom :</label>
                    <input type="text" name='prenom' class="form-control" placeholder="Prenom" required>
                </div>
                <div class="form-group">
                    <label>E-mail :</label>
                    <input type="email" name='email' class="form-control" placeholder="Email" required>
                </div>


                <div class="modal-footer">
                    <button type="submit"  class="btn btn-primary">Sauvegarder</button>
                    <a href='index.html' class="btn btn-danger">Annuler</a>
                </div>
        </form>
    </div>
</div>