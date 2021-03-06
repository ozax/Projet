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
    $route->showEmission('mercredi');
});

$router->get('/replay/(samedi|dimanche|lundi|mardi|mercredi|jeudi|vendredi)' , function ($day) {
    $route = new \Controllers\Radio\EmissionController();
    $route->showEmission($day);
});

$router->get('/grille' , function () {
    $route = new \Controllers\Radio\ProgrammeController();
    $route->showProgramme('mercredi');
});

$router->get('/grille/(samedi|dimanche|lundi|mardi|mercredi|jeudi|vendredi)' , function ($day) {
    $route = new \Controllers\Radio\ProgrammeController();
    $route->showProgramme($day);
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


$router->get('/page/(\d+)' , function ($id) {
    $route = new \Controllers\Radio\PageController();
    $route->showPage($id);
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

    $route = new \Controllers\Admin\ArticleControllerAdmin();
    $route->postArticle () ;

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
    $route->showEmission('mercredi');
});

$router->get('/admin/emissions/(samedi|dimanche|lundi|mardi|mercredi|jeudi|vendredi)' , function ($day) {
    $route = new \Controllers\Admin\EmissionControllerAdmin($day);
    $route->showEmission($day);
});

$router->get('/admin/emissions/add' , function () {
    require './Views/Admin/edit-emission.php';
});

$router->post('/admin/emissions/add' , function () {
   $route = new \Controllers\Admin\EmissionControllerAdmin();
   $route->postnewEmission();

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

$router->get('/admin/programmes' , function () {
    $route = new \Controllers\Admin\ProgrammeControllerAdmin();
    $route->showProgramme('mercredi');
});

$router->get('/admin/programmes/(samedi|dimanche|lundi|mardi|mercredi|jeudi|vendredi)' , function ($day) {
    $route = new \Controllers\Admin\ProgrammeControllerAdmin($day);
    $route->showProgramme($day);
});

$router->get('/admin/programmes/add' , function () {
    require './Views/Admin/edit-programme.php';
});

$router->post('/admin/programmes/add' , function () {
    $route = new \Controllers\Admin\ProgrammeControllerAdmin();
    $route->postnewProgramme();

});

$router->get('/admin/programmes/edit/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\ProgrammeControllerAdmin();
    $route->editProgramme($id);

});
$router->post('/admin/programmes/edit/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\ProgrammeControllerAdmin();
    $route->postEditProgramme($id);

});


$router->get('/admin/programmes/delete/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\ProgrammeControllerAdmin();
    $route->deleteProgramme ($id);

});

$router->get('/admin/editeurs' , function () {
    $route = new \Controllers\Admin\EditeurControllerAdmin();
    $route->showEditor();
});


$router->get('/admin/pages' , function () {
    $route = new \Controllers\Admin\PageControllerAdmin();
    $route->showAllPage();
});


$router->get('/admin/pages/add' , function () {
    require './Views/Admin/edit-page.php';
});

$router->post('/admin/pages/add' , function () {
    $route = new \Controllers\Admin\PageControllerAdmin();
    $route->ajouterPage();
});


$router->get('/admin/pages/edit/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\PageControllerAdmin();
    $route->editPage($id);

});

$router->post('/admin/pages/edit/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\PageControllerAdmin();
    $route->posteditPage($id);

});

$router->get('/admin/pages/delete/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\PageControllerAdmin();
    $route->deletePage ($id);

});

$router->get('/admin/message/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\MessageControllerAdmin();
    $route->consultMessage($id);

});





$router->get('/admin/editeurs/add' , function () {
    require './Views/Admin/add-editeur.php';
});

$router->post('/admin/editeurs/add' , function () {
    $route = new \Controllers\Admin\EditeurControllerAdmin();
    $route->ajouterEditeur();
});

$router->get('/admin/editeurs/delete/(\d+)' , function ($id) {
    $route = new \Controllers\Admin\EditeurControllerAdmin();
    $route->deleteEditeur ($id);

});

$router->get('/admin/messages' , function () {
    include_once "./Views/Admin/header.php";
   $route = new \Controllers\Admin\MessageControllerAdmin();
   $route->showAllmessages ();
    include_once "./Views/Admin/footer.php";
});

$router->get('/admin/profil/edit' , function () {
    $route = new \Controllers\Admin\ProfilControllerAdmin();
    $route->editProfil();
});

$router->post('/admin/profil/edit' , function () {
    $route = new \Controllers\Admin\ProfilControllerAdmin();
    $route->postEditProfil();
});


$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    require './Views/404.html';
});


$router->run();
