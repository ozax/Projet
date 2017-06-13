<?php require "./Views/Radio/header.php"; ?>
    <div class="container">
        <h1 class="title-style">Toute l'actualité</h1>
        <div class="home-news">

            <?php foreach($articlesChunks as $articles): ?>
                <div class="row">
                    <?php foreach($articles as $article): ?>
                        <div class="col-sm-6">

                                <div class="home-news-bloc">
                                    <a href="<?=$repertory ?>/actualites/<?=$article["idArticle"]?>">
                                    <div class="home-news-img" style="background-image: url('<?=$repertory ?><?=$article["image"]?>');">
                                    </div>
                                    </a>
                                    <div class="news-info  news-info-page">
                                        <a href="<?=$repertory ?>/actualites/<?=$article["idArticle"]?>">
                                        <h4 class="news-title"><?=$article["titre"]?></h4>
                                        </a>
                                        <p>
                                          <?=substr(strip_tags($article["contenu"]), 0, 150)?>...<a class="news-read" href="#">Lire la suite</a>
                                        </p>
                                        <i>Publiée le <?=$article["datePublication"]?></i>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>

            </div>
            <div class="news-nav">
                <ul class="pagination">
                    <li <?php if($start==0) echo 'class="disabled"'; ?>>
                        <a href="<?=$repertory?>/actualites/start-<?= $start - 6 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a>
                    </li>
                    <?php
                    for($i = 1; $i <= $nbrPages; $i++){
                        echo '<li class="'; if($i == ($start/6 +1) ) echo "active"; echo '"><a href="'.$repertory.'/actualites/start-'. ($i-1) * 6 .'">'.$i.'</a></li>';
                    }
                    ?>
                    <li <?php if($start/6+1 == $nbrPages) echo 'class="disabled"'; ?>>
                        <a href="<?=$repertory?>/actualites/start-<?= $start+6 ?>" aria-label="Next"><span aria-hidden="true">»</span></a>
                    </li>
                </ul>
            </div>
        </div>


    </div>
<?php
$footer = new \Controllers\Radio\PageController;
$footer->footer();
?>