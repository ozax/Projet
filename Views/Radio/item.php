<?php require "./Views/Radio/header.php"; ?>
    <div class="container">
        <br />
        <div class="home-news">
            <div class="row">
                <div class="col-sm-8">
                    <a href="<?=$repertory ?>/actualites/<?=$article["idArticle"]?>">
                        <h3><?= $article["titre"] ?></h3>
                    </a>
                    <i>Publiée le <?= $article["datePublication"] ?> | Par <?=$editeur["nom"].' '. $editeur["prenom"] ?></i>
                    <a href="<?=$repertory ?>/actualites/<?=$article["idArticle"]?>">
                        <div class="news-img" style="background-image: url('<?=$repertory ?><?= $article["image"] ?>');">
                        </div>
                    </a>
                    <div class="item">
                        <?= $article["contenu"] ?>
                    </div>


                </div>
                <div class="col-sm-4">
                    <?php $i = 0; foreach($articles as $articleResum ): ?>
                        <?php if ($articleResum["idArticle"] != $article["idArticle"] && $i < 3): ?>
                        <div class="home-news-bloc">
                            <div class="home-news-img" style="background-image: url('<?=$repertory . $articleResum["image"]?>');">
                            </div>
                            <div class="news-info">
                                <h4><a href="<?=$articleResum["idArticle"]?>"><?=$articleResum["titre"]?></a></h4>
                                <i>Publiée le <?=$articleResum["datePublication"] ?></i>
                            </div>
                        </div>
                        <?php ++$i; endif; ?>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>


    </div>
<?php
$footer = new \Controllers\Radio\PageController;
$footer->footer();
?>