<div class="container-fluid footer">
    <div class="container footer-pages">
        <?php
        for ($i = 0 ; $i < count($listePage) ; $i++){

            if($i % 4 == 0){
                echo '<div class="row">';
            }
            if($i % 2 == 0){
                echo '<div class="col-md-6"><div class="row">';
            }
            echo '
                    <div class="col-sm-6">
                        <p>- <a class="page-url" href="'. $repertory  .'/page/' . $listePage[$i]["idPage"] .'/'. str_replace(' ', '-', $listePage[$i]["titre"]) . '">' . $listePage[$i]["titre"] . '</a></p>
                    </div>
                ';
            if($i % 2 == 1){
                echo '</div></div>';
            }
            if($i % 4 == 3){
                echo '</div>';
            }

        }
        if(count($listePage)%4 != 0){
            echo'</div></div></div>';
        }
        ?>



    </div>

    <div class="container footer-soummam">
        <div class="row">

            <div class="col-sm-6 footer-logo">
                <a href="<?=$repertory ?>">
                    <img class="pull-left" src="<?=$repertory ?>/static/images/logo-55x56.png" alt="Logo radio Soummam" />
                    <div class="pull-left">
                        <h1>RADIO SOUMMAM</h1>
                        <i>Yidwen, yal ass</i>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 socials">
                <a class="pull-right" href="#"><img src="<?=$repertory ?>/static/images/icon-youtube.svg" alt="icon youtube" /></a>

                <a class="pull-right" href="#"><img src="<?=$repertory ?>/static/images/icon-facebook.svg" alt="icon facebook" /></a>

                <p class="pull-right">Nous suivre :</p>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid footer-copyright">
    <p class="text-center">© Radio soummam - Tous droits réservés</p>
</div>


<script src="<?=$repertory ?>/static/js/jquery.min.js"></script>
<script src="<?=$repertory ?>/static/js/bootstrap.min.js"></script>
</body>

</html>