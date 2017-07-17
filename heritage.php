<?php
require "class/Personnage.php";
require "class/Rodeur.php";
require "class/Messager.php";
require "class/Soigneur.php";
require "class/Archer.php";
require "class/Chevalier.php";

$pierre = new Personnage("Pierre");
$pierre->move("Paris");

$paul = new Rodeur("Paul");
$paul->run("Paris");

$thomas = new Messager("Thomas");
$thomas->setSecret(" Pierre va à Narbonne ");
$thomas->deliverMessage( "Paris" );

$thomas->attack($pierre);

$fred = new Soigneur("Frederic");
$fred->heal($pierre);

$flo = new Archer("Florence");
$flo->move("Montpellier");
$flo->attack($pierre);

$melvin = new Chevalier("Melvin");
$melvin->setShield(0.5);
$flo->attack($melvin);