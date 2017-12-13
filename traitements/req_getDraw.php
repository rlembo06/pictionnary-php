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

$id = $_GET['id'];

$object = new Drawing([ 'id' => $id ]);

$manager = new Manager($bdd);
echo $manager->getDrawings_byId($object, true);