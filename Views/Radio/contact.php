<?php require "./Views/Radio/header.php"; ?>
    <div class="container">
        <br />
        <div class="home-news">
            <div class="page-title">
                <h1>Contactez-nous</h1>
            </div>
            <div class="row contact-soummam">
                <div class="col-sm-4">
                    <h4>Information de contact</h4>
                    <dl class="dl-horizontal">
                        <dt>
                            <span class="glyphicon glyphicon-screenshot"></span>
                                
                            </dt>
                        <dd>
                            <b>Siège social</b>
                            <p>Batiment Madaoui, N 12 Boulevard Krim Belkacem, Béjaïa 06000</p>
                        </dd>
                        <dt>
                            <span class="glyphicon glyphicon-envelope"></span>
                                
                            </dt>
                        <dd>
                            <b>E-mail</b>
                            <p>Contact@radiosoummam.dz</p>
                        </dd>
                        <dt>
                            <span class="glyphicon glyphicon-earphone"></span>
                                
                            </dt>
                        <dd>
                            <b>Téléphone</b>
                            <p>+213 34 00 00 00</p>
                            <p>+213 34 00 00 00</p>
                        </dd>
                    </dl>
                </div>
                <div class="col-sm-8">
                    <h4>Formulaire de contact</h4>
                    <?php
                    if (isset($msg))
                        $msg->display();
                    ?>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </div>
                                    <input name="nom" class="form-control" placeholder="Nom complet" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" input-group">
                                    <span class="input-group-addon" id="sizing-addon1">@</span>
                                    <input name="email" class="form-control" placeholder="Adresse mail" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-book"></span>
                                    </div>
                                    <input name="sujet" class="form-control" placeholder="Objet" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </div>
                                    <textarea class="form-control" name="message" placeholder="Sujet"></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LeKQBwUAAAAAGyRY-Fa7sz3I_8vj0ll_8kjiP-e"></div>
                                <input type="submit" name="submit" value="Envoyer" class="btn btn-primary btn-block">
                            </div>

                        </div>
                    </form>
                </div>
            </div>


        </div>


        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d818200.8219907812!2d4.447618444431373!3d36.768241336414256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f2cc99630d65b7%3A0xd3f730870091ebbb!2sRadio+Soummam+de+B%C3%A9ja%C3%AFa!5e0!3m2!1sfr!2sfr!4v1493052729670" width="996" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>




        </div>
<?php
$footer = new \Controllers\Radio\PageController;
$footer->footer();
?>