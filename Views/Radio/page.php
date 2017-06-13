<?php require "./Views/Radio/header.php"; ?>
<div class="container">
    <br />
    <div class="home-news">
        <div class="page-title">
            <h1><?= $page["titre"] ?></h1>
        </div>
        <div class="item">
            <?= $page["contenu"] ?>
        </div>
    </div>
</div>
<?php
$footer = new \Controllers\Radio\PageController;
$footer->footer();
?>