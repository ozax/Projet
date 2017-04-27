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
                    <form>
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
                                    <input name="nom" class="form-control" placeholder="Adresse mail" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-book"></span>
                                    </div>
                                    <input name="nom" class="form-control" placeholder="Sujet" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </div>
                                    <textarea class="form-control" name="Message" placeholder="Sujet"></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LeKQBwUAAAAAGyRY-Fa7sz3I_8vj0ll_8kjiP-e"></div>

                                <button type="button" class="btn btn-primary btn-block">Envoyer</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
<script src='https://www.google.com/recaptcha/api.js'></script>

        <div id="map" class="maps-soummam">
        </div>
            <script>
                var map;

                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: 36.749914,
                            lng: 5.054046
                        },
                        zoom: 20
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsINnwh83D2cN9YTXBKoh3tP0nWCqgNio&callback=initMap" async defer></script>


        </div>
