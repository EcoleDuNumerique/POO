<?php
require_once "Stylo.php";

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