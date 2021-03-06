<?php require "./Views/Admin/header.php"; ?>
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Articles</h3>
    </div>
    <div class="panel-body">
         <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><div class='icon'> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Ajouter un article</div></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Le titre :</label>
                    <input value="<?php if (isset( $_SESSION['article']['titre'])) echo $_SESSION['article']['titre']  ?>" type="text" name='titre' class="form-control" placeholder="titre" required>



                </div>
                <div class="form-group">
                    <label for="icone"><span class="glyphicon glyphicon-picture icon" aria-hidden="true"></span> Image (JPG, PNG ou GIF) :</label>
                    <input type="file" name="image" id="image">
                    <div class="form-group">
                    </div>
                    <label>Le contenu :</label>
                    <textarea name='contenu' class="form-control tinymce" placeholder="Contenu"><?php if (isset($_SESSION['article']['contenu']))echo $_SESSION['article']['contenu'] ?></textarea> </textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    <a href='index.html' class="btn btn-danger">Annuler</a>
                </div>
        </form>
    </div>
</div>
</div>
<?php
unset($_SESSION['article']);
require "./Views/Admin/footer.php"; ?>