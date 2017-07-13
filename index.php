<?php
require_once "Stylo.php";

$stylo1 = new Stylo(); //Nouvelle instance de Stylo !
$stylo1->couleur = "green"; //Change les propriétés !
$stylo1->marque = "arial";

$stylo2 = new Stylo(); //Nouvelle instance de Stylo !
$stylo2->couleur = "red";
$stylo2->marque = "courrier";

// echo "<pre>";
// var_dump( $bic );
// var_dump( $boss );
// echo "</pre>";

$stylo1->ecrire( "Je suis le " . $stylo1->marque );
$stylo2->ecrire( "Je suis le " . $stylo2->marque );

$stylo1->ecrire( "zeifjo apojdpoe jfoaij fajf ao" );