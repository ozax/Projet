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
            <?php foreach($programme as $programme): ?>
            <section class="timeline-item">
                <div class="timeline-item-details">
                    <time class="timeline-item-details-date"><?=$programme["heurDebut"]?> à <?=$programme["heurFin"]?></time>
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