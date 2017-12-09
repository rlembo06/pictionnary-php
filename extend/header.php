<?php
session_start ();

// ***************** //
// Importation BDD :
require('extend/bdd.php');

// Chargement automatique des classes
spl_autoload_register(function ($classname) { require 'class/'.$classname.'.class.php'; });

// Gestionnaire des classes
$manager = new Manager($bdd);
// ***************** //
?>

<!DOCTYPE html>  
<html>
    
    <head>  
        <meta charset=utf-8 />  
        <title>Pictionnary - Inscription</title>
        <meta name="description" content="TP - Lembo Romain">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" media="screen" href="css/styles.css" >
        <link rel="stylesheet" href="css/perso.css"/>
        <link rel="stylesheet" href="css/blog-home.css">
        <link rel="stylesheet" href="css/paint.css">

        <link 
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
            crossorigin="anonymous" />

    </head>
    
    <body>        

        <header>
            
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
                        <a id="lienTitle" class="navbar-brand" href="index.php">Pictionnary</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <?php if (isset($_SESSION['id']) AND isset($_SESSION['email'])) { ?>
                                <li><p class="navigation">Bonjour <?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?></p></li>
                                <li><img class="navigation photoLogin" src="<?= $_SESSION['profilepic'] ?>"/></li>
                                <li><a class="navigation" href="traitements/logout.php">Déconnexion</a></li>
                            <?php } else { ?>
                                <li><a class="navigation" href="inscrire.php">Inscription</a></li>
                                <li><a class="navigation" href="index.php">Connexion</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.container -->
            </nav>
       
        </header>
        
        <div class="container"><div class="row">