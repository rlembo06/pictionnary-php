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
        
        <link rel="stylesheet" media="screen" href="css/styles.css" >
        <link rel="stylesheet" href="css/perso.css"/>
        <!--<link 
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
            crossorigin="anonymous" />-->

    </head>
    
    <body>