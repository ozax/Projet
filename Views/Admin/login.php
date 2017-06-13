<!DOCTYPE html>
<!-- Page de connexion pour accéder à l'éspace administratif -->
<html lang>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Espace administration | Se connécter</title>
        <link href="<?=$repertory?>/static/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=$repertory?>/static/css/main.admin.css" rel="stylesheet">
        <style>

body{background:white;}
footer{position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;}
        </style>
    </head>
    <body class="b">

        <nav id="custom-bootstrap-menu" class="navbar-default " role="navigation">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand" href="login.html">Espace Administration</a>
                </div>
            </div>
        </nav>

        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center"><span class="glyphicon glyphicon-user" aria-hidden="true"> Connectez-vous </span></h1>
                    </div>
                </div>
            </div>
        </header>

        <section id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form id="login" methode="post" action="index.html" class="well">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="exemple@exemple.com" required>
                            </div>
                            <div class="form-group">
                                <label>Mot de passe</label>
                                <input type="password" class="form-control" placeholder="mot de passe" required>
                            </div>
                            <button  type="submit" name='connexion' class="btn btn-primary">Se connecter</button> ou <a href="radio/home.html"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Aller vers le site</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer">
            <p>Copyright Radio Soummam, &copy; 2017</p>
        </footer>

        <script>
            CKEDITOR.replace('editor1');
        </script>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?=$repertory?>/static/js/bootstrap.min.js"></script>

    <script type="text/javascript"  src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
    </body>
</html>
