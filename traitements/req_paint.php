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

$post_drawing = json_decode( $_POST['drawing'] );

$drawing = new Drawing([ 
    'commandes' => $post_drawing->commandes,
    'id_user'   => $post_drawing->id_user,
    'draw'      => $post_drawing->draw
]);

$manager = new Manager($bdd);
$manager->createDrawing($drawing);