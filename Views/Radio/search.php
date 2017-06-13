<?php require "./Views/Radio/header.php"; ?>
<div class="container">
    <h1 class="title-style">Rechercher sur radio Soummam</h1>
    <div class="home-news">
        <form class="search-form row">
            <div class="col-lg-12">
                <div class="input-group">
                    <input type="text" value="<?= $key ?>" name="key" class="form-xcontrol" placeholder="Rechercher...">
                    <span class="input-group-btn">
        <button class="btn btn-primary " type="button">Recherche</button>
      </span>
                </div>
                <!-- /input-group -->
            </div>
        </form>
        <div class="search-result">
            <i>Environ <?=count($results) ?> résultats</i>
            <hr />
            <?php foreach ($results as $result): ?>
                <div class="row line-media">
                    <div class="col-sm-12">
                        <div class="media">
                            <div class="search-img" style="background-image: url('./images/news/Emmanuel-Macron.jpg');">
                            </div>
                            <div class="media-body">
                                <a href="<?=$repertory ?>/actualites/<?=$result["idArticle"]?>"><h3><?= $result['titre'] ?></h3></a>
                                <p>
                                    <?=substr(strip_tags($result["contenu"]), 0, 150)?>
                                </p>
                                <i>Publiée le <?=substr($result['datePublication'],0,10)?> à <?=substr($result['datePublication'],10,6)?></i>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

<?php
$footer = new \Controllers\Radio\PageController;
$footer->footer();
?>