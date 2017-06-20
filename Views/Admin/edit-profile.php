<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Modifier votre profil</h3>
    </div>
    <div class="panel-body">
        <?php
        $msg = new \Services\FlashMessages();
        if (isset($msg))
            $msg->display();
        ?>
        <form method='post' action='' enctype="multipart/form-data">
            <!-- Le formulaire avec les ancien champs déja saisit est chargé avec php -->
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nom :</label> <!-- l'ancien nom -->
                    <input value="<?php if (isset($_SESSION['profil']['nom'])) echo $_SESSION['profil']['nom'] ?>" type="text" name='nom' class="form-control" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <label>Prenom :</label> <!-- l'ancien prénom -->
                    <input value="<?php if (isset($_SESSION['profil']['prenom'])) echo $_SESSION['profil']['prenom'] ?>" type="text" name='prenom' class="form-control" placeholder="Prenom" required>
                </div>
                <div class="form-group">
                    <label>E-mail :</label> <!-- l'ancien E-mail -->
                    <input value="<?php if (isset($_SESSION['profil']['email'])) echo $_SESSION['profil']['email'] ?>" type="email" name='email' class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <label>Ancien Mot de passe :</label> <!-- l'ancien mot de passe -->
                    <input type="password" name='mdp' class="form-control" placeholder="Ancien mot de passe" required>
                </div>
                <div class="form-group">
                    <label>Mot de passe :</label> <!-- le nouveau mot de passe -->
                    <input type="password" name='mdp1' class="form-control" placeholder="Nouveau mot de passe" required>
                </div>
                <div class="form-group">
                    <label>Confirmer Mot de passe :</label> <!-- confirmer le nouveau mot de passe -->
                    <input type="password" name='mdp2' class="form-control" placeholder="Confirmer mot de passe"
                           required>
                </div>
                <div class="modal-footer">
                    <button type="submit" name='barticle' class="btn btn-primary">Sauvegarder</button>
                    <a href='index.html' class="btn btn-danger">Annuler</a>
                </div>


            </div>
        </form>
    </div>
</div>

<?php require "./Views/Admin/footer.php"; ?>
