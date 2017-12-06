<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

// ***************** //
// Importation BDD :
require('../extend/bdd.php');

// Chargement automatique des classes
spl_autoload_register(function ($classname) { require '../class/'.$classname.'.class.php'; });

// Gestionnaire des classes
$manager = new Manager($bdd);
// ***************** //
?>

<?php

$post_user = json_decode( $_POST['user'] );

$user = new User([ 
    'email'     => $post_user->email,
    'password'  => $post_user->password,
    'nom'       => $post_user->nom,
    'prenom'    => $post_user->prenom,
    'tel'       => $post_user->tel,
    'website'   => $post_user->website,
    'sexe'      => $post_user->sexe,
    'birthdate' => $post_user->birthdate,
    'ville'     => $post_user->ville,
    'taille'    => $post_user->taille,
    'couleur'   => $post_user->couleur,
    'profilepic'=> $post_user->profilepic
]);

/*
$email       = stripslashes($_POST['email']);
$password    = stripslashes($_POST['password']);
$nom         = stripslashes($_POST['nom']);
$prenom      = stripslashes($_POST['prenom']);
$tel         = stripslashes($_POST['telephone']);
$website     = stripslashes($_POST['website']);
$birthdate   = stripslashes($_POST['birthdate']);
$ville       = stripslashes($_POST['ville']);
$taille      = stripslashes($_POST['taille']);
$couleur     = stripslashes($_POST['couleur']);
$profilepic  = stripslashes($_POST['profilepicfile']);

$sexe = "";  
if (array_key_exists('sexe',$_POST)) $sexe = stripslashes($_POST['sexe']);  
$sexe        = stripslashes($_POST['sexe']);

$user = new User([ 
    'email'     => $email,
    'password'  => $password,
    'nom'       => $nom,
    'prenom'    => $prenom,
    'tel'       => $tel,
    'website'   => $website,
    'sexe'      => $sexe,
    'birthdate' => $birthdate,
    'ville'     => $ville,
    'taille'    => $taille,
    'couleur'   => $couleur,
    'profilepic'=> $profilepic
]);
*/

$manager = new Manager($bdd);

if($manager->existUser($user)) $manager->getUsers_byEmail($user, true);
else echo $manager->createUser($user);


//$manager->createUser($user);

header("location: ../index.php");

//echo $_COOKIE['birthdate'];

 