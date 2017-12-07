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

        <header>
            
            <?php
            if (isset($_SESSION['id']) AND isset($_SESSION['email'])) {
            ?>
                <div>
                    <p>Bonjour <?= $_SESSION['prenom'] ?> <?= $_SESSION['nom'] ?></p>
                </div>
                <div>
                    <img src="<?= $_SESSION['profilepic'] ?>"/>
                </div>
                <a href="traitements/logout.php">Déconnexion</a>

            <?php } else { ?>

                <form id="connexion" method="post" action="traitements/req_login.php">
                    <fieldset>
                        <legend>Se connecter</legend>
                        <ul>  
                            <li>  
                                <label for="email">E-mail :</label>  
                                <input type="email" name="email" id="emailConnexion" required/>  
                                <span class="form_hint">Format attendu "name@something.com"</span>  
                            </li> 
                            <li>  
                                <label for="mdp1">Mot de passe :</label>  
                                <input
                                    required
                                    placeholder="Saisir le mot de passe"
                                    type="password" 
                                    name="password" 
                                    id="mdpConnexion" 
                                    pattern="[0-9a-zA-Z]{5,9}" 
                                />  
                                <span class="form_hint">De 6 à 8 caractères alphanumériques.</span>  
                            </li>
                            <li>  
                                <input id="submit" type="submit" value="Connexion" /> 
                            </li>
                            <li>  
                                <a href="inscrire.php">S'inscrire</a>
                            </li>  
                        </ul>
                    </fieldset>
                </form>

            <?php } ?>
            
        </header>