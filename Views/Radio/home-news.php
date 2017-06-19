<?php require "./Views/Radio/header.php"; ?>
<?php
$footer = new \Controllers\Radio\ProgrammeController();
$footer->jumbotronAction();
?>
    <div class="container">
        <h1 class="title-style">Actualités</h1>
        <div class="home-news">


            <?php foreach($articlesChunks as $articles): ?>
            <div class="row">
                <?php foreach($articles as $article): ?>
                    <div class="col-sm-4">
                        <a href="<?=$repertory ?>/actualites/<?=$article["idArticle"]?>">
                            <div class="home-news-bloc">
                                <div class="home-news-img" style="background-image: url('<?=$repertory ?><?=$article["image"]?>');">
                                </div>
                                <div class="news-info">
                                    <h4><?=$article["titre"]?></h4>
                                    <i>Publiée le <?=$article["datePublication"]?></i>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>


        </div>
        <div class="voir-plus">
            <a href="<?=$repertory ?>/actualites" class="voir-plus-btn">DÉCOUVREZ TOUTES NOS ACTUALITÉS</a>
        </div>

    </div>
<?php
$footer = new \Controllers\Radio\PageController;
$footer->footer();
?>