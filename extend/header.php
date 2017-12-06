<?php
/**
 * @author Romain Lembo
 */

session_start ();

// ***************** //
// Importation BDD :
require('../global/bdd.php');

// Chargement automatique des classes
spl_autoload_register(function ($classname) { require '../class/'.$classname.'.class.php'; });

// Gestionnaire des classes
$manager = new Manager($bdd);
// ***************** //
?>


<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <title>IUT UNice Questionnaire - BO</title>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS Distant -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

        <!-- CSS Local -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href="css/blog-home.css" rel="stylesheet">
        
    </head>
    
<body>
    
        
    <!-- JS Distant -->    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="lienTitle" class="navbar-brand" href="index.php">IUT UNice Questionnaire - BO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if ( isset($_SESSION['nom']) && isset($_SESSION['password']) && $_SESSION['privilege'] == 1 ) { ?>
                        <li><a class="navigation" href="index.php">Historique</a></li>
                        <li><a class="navigation" href="prepa.php">Préparer un examen</a></li>
                        <li><a class="navigation" href="modules/deconnexion.php">Déconnexion</a></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->

    </nav>
    
     <!-- Page Content -->
    <div class="container"><div class="row">