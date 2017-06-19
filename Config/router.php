<?php
$router = new \Services\Router();

$router->get('/' , function () {
    $route = new \Controllers\Radio\ArticleController();
    $route->indexArticle();
});

$router->get('/accueil' , function () {
    $route = new \Controllers\Radio\ArticleController();
    $route->indexArticle();
});

$router->get('/actualites' , function ($start = 0) {
    $route = new \Controllers\Radio\ArticleController();
    $route->actualitesArticle($start);
});

$router->get('/actualites/start-(\d+)' , function ($start) {
    $route = new \Controllers\Radio\ArticleController();
    $route->actualitesArticle($start);
});

$router->get('/actualites/(\d+)' , function ($id) {
    $route = new \Controllers\Radio\ArticleController();
    $route->showArticle($id);
});

$router->get('/replay' , function () {
    $route = new \Controllers\Radio\EmissionController();
    $route->showEmission();
});

$router->get('/replay/(samedi|dimanche|lundi|mardi|mercredi|jeudi|vendredi)' , function () {
    $route = new \Controllers\Radio\EmissionController();
    $route->showEmission();
});

$router->get('/grille' , function () {
    $route = new \Controllers\Radio\ProgrammeController();
    $route->showProgramme();
});

$router->get('/grille/(\w+)' , function () {
    $route = new \Controllers\Radio\ArticleController();
    $route->indexArticle();
});

$router->get('/direct' , function () {
    require './Views/Radio/live.php';
});

$router->get('/contact' , function () {
    $route = new \Controllers\Radio\MessageController();
    $route->contact();
});

$router->post('/contact' , function () {
    $route = new \Controllers\Radio\MessageController();
    $route->postMessage();
});

$router->get('/recherche' , function () {
    $route = new \Controllers\Radio\ArticleController();
    $route->searchArticle($_GET['key']);
});


$router->get('/page/(\d+)' , function () {
    $route = new \Controllers\Radio\ArticleController();
    $route->indexArticle();
});

$router->before('GET|POST', '/admin/.*', function() {
    require 'Config/config.php';
    if (!isset($_SESSION['admin'])) {
        header("Location: ". $repertory. "/login");
        exit();
    }
});


$router->get('/admin' , function () {
    require 'Config/config.php';
    if (!isset($_SESSION['admin'])) {
        header("Location: ". $repertory. "/admin/login");
        exit();
    }else{
        $route = new \Controllers\Admin\DashboardControllerAdmin();
        $route->showHome();
    }
});


$router->get('/login' , function () {
    $route = new \Controllers\Admin\ProfilControllerAdmin();
    $route->login();
});

$router->post('/login' , function () {
    $route = new \Controllers\Admin\ProfilControllerAdmin();
    $route->postLogin();
});

$router->get('/logout' , function () {
    $route = new \Controllers\Admin\ProfilControllerAdmin();
    $route->logout();
});

$router->get('/admin/articles' , function () {
    $route = new \Controllers\Admin\ArticleControllerAdmin();
    $route->showArticle();
});

$router->get('/admin/articles/add' , function () {
    require './Views/Admin/edit-article.php';
});

$router->post('/admin/articles/add' , function () {
    $route = new \Controllers\Admin\ArticleControllerAdmin();
    $route->postnewArticle ();
});


$router->get('/admin/articles/edit/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\ArticleControllerAdmin();
    $route->editArticle($id);
});

$router->post('/admin/articles/edit/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\ArticleControllerAdmin();
    $route->postEditArticle($id);
});

$router->get('/admin/articles/delete/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\ArticleControllerAdmin();
    $route->deleteArticle($id);
});

$router->get('/admin/emissions' , function () {
    $route = new \Controllers\Admin\EmissionControllerAdmin();
    $route->showEmission ();
});

$router->get('/admin/emissions/add' , function () {
    require './Views/Admin/edit-emission.php';
});

$router->post('/admin/emissions/add' , function () {
   $rout = new \Controllers\Admin\EmissionControllerAdmin();
   $rout->postnewEmission ();

});


$router->get('/admin/emissions/edit/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\EmissionControllerAdmin();
    $route->editEmission($id);

});

$router->post('/admin/emissions/edit/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\EmissionControllerAdmin();
    $route->postEditEmission($id);
});

$router->get('/admin/emissions/delete/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\EmissionControllerAdmin();
    $route->deleteEmission ($id);

});
$router->get('/admin/editeurs' , function () {
    $route = new \Controllers\Admin\EditeurControllerAdmin();
    $route->showEditor();
});

$router->get('/admin/pages' , function () {
    $route = new \Controllers\Admin\PageControllerAdmin();
    $route->showAllPage();
});


$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    require './Views/404.html';
});


$router->run();
