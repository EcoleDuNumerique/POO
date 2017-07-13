<?php
require_once "class/Stylo.php";
require_once "class/User.php";
require_once "class/Distributeur.php";

$stylo1 = new Stylo("arial", "green"); //Nouvelle instance de Stylo !

$stylo2 = new Stylo("courrier", "red"); //Nouvelle instance de Stylo !

$stylo3 = new Stylo("arial", "yellow");
$stylo3->couleur = "blue";

// echo "<pre>";
// var_dump( $bic );
// var_dump( $boss );
// echo "</pre>";

$stylo1->ecrireItalic( "Je suis le " . $stylo1->marque );
$stylo2->ecrire( "Je suis le " . $stylo2->marque );

$stylo3->ecrire( "zeifjo apojdpoe jfoaij fajf ao" );

$stylo1->getCouleur();
$stylo1->setCouleur("red");


/*  ----- Users ------- */

$user = new User("pierre.mar@lidem.eu", "monpass");
$user->inscription(); //On insère cet utilisateur dans la base de donnée


/* ------ Distributeur -------- */
$distributeur = new Distributeur( 10, 10, 9876 );

echo "<p> Il y a " . $distributeur->canettes . " canettes </p>";
//echo "<p> Il y a " . $distributeur->monnaie . " Euros </p>";

$distributeur->acheter(1.80);
//$distributeur->rendreMonnaie(100);

echo "<p>".$distributeur->getMonnaie(9876)."</p>";
$distributeur->addMonnaie(9876, 30);
echo "<p>".$distributeur->getMonnaie(9876)."</p>";

$distributeur->exterieur();

