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
    'email'     => $post_user->email
]);


$manager = new Manager($bdd);

echo $manager->existUser($user);
 