<?php require "./Views/Radio/header.php"; ?>
<div class="container">
    <h1 class="title-style">Nos émissions</h1>
    <div class="nav-programme">
        <ul class="list-unstyled list-inline">
            <li <?php if($day == 'samedi') echo 'class="active"' ?>><a href="<?=$repertory ?>/replay/samedi">Samedi</a></li>
            <li <?php if($day == 'dimanche') echo 'class="active"' ?>><a href="<?=$repertory ?>/replay/dimanche">Dimanche</a></li>
            <li <?php if($day == 'lundi') echo 'class="active"' ?>><a href="<?=$repertory ?>/replay/lundi">Lundi</a></li>
            <li <?php if($day == 'mardi') echo 'class="active"' ?>><a href="<?=$repertory ?>/replay/mardi">Mardi</a></li>
            <li <?php if($day == 'mercredi') echo 'class="active"' ?>><a href="<?=$repertory ?>/replay/mercredi">Mercredi</a></li>
            <li <?php if($day == 'jeudi') echo 'class="active"' ?>><a href="<?=$repertory ?>/replay/jeudi">Jeudi</a></li>
            <li <?php if($day == 'vendredi') echo 'class="active"' ?>><a href="<?=$repertory ?>/replay/vendredi">Vendredi</a></li>
        </ul>
    </div>

    <div class="home-news">

        <!-- Wrapper général -->
        <div class="timeline">
            <!-- Wrapper d'un article -->
            <?php foreach($emission as $emission): ?>
            <section class="timeline-item">
                <div class="timeline-item-details">
                    <time class="timeline-item-details-date"><?=substr($emission["heurDebut"],0,5)?> à <?=substr($emission["heurFin"],0,5)?></time>
                    <!-- Marqueur -->
                    <div class="timeline-item-details-marker"></div>
                    <!-- Contenu -->
                    <div class="timeline-item-details-description">
                        <h2><?=$emission["sujet"]?></h2>
                        <p><?=$emission["description"]?></p>
                        <audio controls="">
                            <source src ="<?=$repertory ?>/upload/<?=$emission["Fichier"]?>">

                        </audio>

                    </div>
                </div>
            </section>
            <hr class="visible-xs" />
            <?php endforeach; ?>



        </div>




    </div>

</div>
<?php
$footer = new \Controllers\Radio\PageController;
$footer->footer();
?>