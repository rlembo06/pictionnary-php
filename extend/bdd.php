<?php
/**
 * @author Romain Lembo
 */

/* -------------------------
	DEBUT : Connection BDD + Gestion erreurs
------------------------- */

try
{
	// Connection a la BDD
	$bdd = new PDO
	(
		/* Host + nom BDD: */'mysql:host=localhost; dbname=projetweb',
		/* Identifiant : */'root',
		/* Mot de passe : */'',
		/* Opérateur de résolution de portée : */array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
	);
	
	// Caractères en UTF-8
	$bdd->exec("SET CHARACTER SET utf8");
}


// Gestion des Erreurs
catch (Exception $e)
{
	die('Erreur: ' . $e->getMessage());
}

/* -------------------------
	FIN : Connection BDD + Gestion erreurs
------------------------- */
?>
