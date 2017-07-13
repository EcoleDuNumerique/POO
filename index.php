<?php
require_once "Stylo.php";

$bic = new Stylo(); //Nouvelle instance de Stylo !
$bic->couleur = "green"; //Change les propriétés !
$bic->marque = "bic";

$boss = new Stylo(); //Nouvelle instance de Stylo !
$boss->couleur = "black";
$boss->marque = "boss";

// echo "<pre>";
// var_dump( $bic );
// var_dump( $boss );
// echo "</pre>";

$bic->ecrire( "Je suis le bic" );
$boss->ecrire( "Je suis le boss" );