<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Message</h3>

    </div>
    <div class="panel-body">

        <div class="modal-header">

        </div>

        <div class="modal-body">
            <p><b> Objet : </b><?=$message["objet"]?></p>
            <p><b> Nom : </b> <?=$message["nomExpditeur"]?></p>
            <p><b> E-mail : </b><?=$message["emailExpditeur"]?></p>
            <p><b> Date : </b> <?=$message["dateEnvoie"]?></p>
            <p><b> Message : </b><?=$message["contenu"]?> </p>


            <form methode='post' action='#' enctype="multipart/form-data">
                <div class="form-group">
                    <label>Répondre :</label>
                    <textarea name='contenu' class="form-control tinymce" placeholder="Contenu"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" name='barticle' class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require "./Views/Admin/footer.php"; ?>