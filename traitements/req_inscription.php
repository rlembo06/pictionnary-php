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
    'tel'       => $post_user->telephone,
    'website'   => $post_user->website,
    'sexe'      => $post_user->sexe,
    'birthdate' => $post_user->birthdate,
    'ville'     => $post_user->ville,
    'taille'    => $post_user->taille,
    'couleur'   => $post_user->couleur,
    'profilepic'=> $post_user->profilepic
]);

$manager = new Manager($bdd);

if($manager->existUser($user)) echo $manager->getUsers_byEmail($user, true);
else echo $manager->createUser($user);



 