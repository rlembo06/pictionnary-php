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

$email = $_POST['email'];
$password = $_POST['password'];

$user = new User([ 
    'email'     => $email,
    'password'  => $password
]);

$manager = new Manager($bdd);
$manager->getConnexion($user);

header('Location: ../');