<div class="container">
    <h1 class="title-style">Grille des programmes</h1>
    <div class="nav-programme">
        <ul class="list-unstyled list-inline">
            <li class="active"><a href="#">Samedi</a></li>
            <li><a href="#">Dimanche</a></li>
            <li><a href="#">Lundi</a></li>
            <li><a href="#">Mardi</a></li>
            <li><a href="#">Mercredi</a></li>
            <li><a href="#">Jeudi</a></li>
            <li><a href="#">Vendredi</a></li>
        </ul>
    </div>

    <div class="home-news">

        <!-- Wrapper général -->
        <div class="timeline">
            <!-- Wrapper d'un article -->
            <?php foreach($emission as $emission): ?>
            <section class="timeline-item">
                <div class="timeline-item-details">
                    <time class="timeline-item-details-date"><?=$emission["heurDebut"]?> à <?=$emission["heurFin"]?></time>
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