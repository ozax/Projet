<?php require "./Views/Radio/header.php"; ?>
<div class="container">
    <h1 class="title-style">Grille des programmes</h1>
    <div class="nav-programme">
        <ul class="list-unstyled list-inline">
            <li <?php if($day == 'samedi') echo 'class="active"' ?>><a href="<?=$repertory ?>/grille/samedi">Samedi</a></li>
            <li <?php if($day == 'dimanche') echo 'class="active"' ?>><a href="<?=$repertory ?>/grille/dimanche">Dimanche</a></li>
            <li <?php if($day == 'lundi') echo 'class="active"' ?>><a href="<?=$repertory ?>/grille/lundi">Lundi</a></li>
            <li <?php if($day == 'mardi') echo 'class="active"' ?>><a href="<?=$repertory ?>/grille/mardi">Mardi</a></li>
            <li <?php if($day == 'mercredi') echo 'class="active"' ?>><a href="<?=$repertory ?>/grille/mercredi">Mercredi</a></li>
            <li <?php if($day == 'jeudi') echo 'class="active"' ?>><a href="<?=$repertory ?>/grille/jeudi">Jeudi</a></li>
            <li <?php if($day == 'vendredi') echo 'class="active"' ?>><a href="<?=$repertory ?>/grille/vendredi">Vendredi</a></li>
        </ul>
    </div>

    <div class="home-news">
        <!-- Wrapper général -->
        <div class="timeline">
            <!-- Wrapper d'un article -->
            <?php foreach($programme as $programme): ?>
            <section class="timeline-item">
                <div class="timeline-item-details">
                    <time class="timeline-item-details-date"><?=substr($programme["heurDebut"],0,5)?> à <?=substr($programme["heurFin"],0,5)?></time>
                    <!-- Marqueur -->
                    <div class="timeline-item-details-marker"></div>
                    <!-- Contenu -->
                    <div class="timeline-item-details-description">
                        <h2><?=$programme["sujet"]?></h2>
                        <p><?=$programme["description"]?></p>
                    </div>
                </div>
            </section>
            <hr class="visible-xs"/>
            <?php endforeach; ?>


        </div>



    </div>

</div>
<?php
$footer = new \Controllers\Radio\PageController;
$footer->footer();
?>