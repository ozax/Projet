<?php require "./Views/Radio/header.php"; ?>
    <div class="container">
        <br />
        <div class="home-news">
            <div class="page-title">
                <h1>Écouter le live radio</h1>
            </div>
            <div class="live">
                <iframe src="http://static.infomaniak.ch/infomaniak/radio/html/bejaia_player.html" height="100" width="468" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                
            </div>
        </div>


    </div>
<?php
$footer = new \Controllers\Radio\PageController;
$footer->footer();
?>