<?php
require "class/Display.php";
require "class/Entrainable.php";
require "class/Personnage.php";
require "class/Rodeur.php";
require "class/Messager.php";
require "class/Soigneur.php";
require "class/Archer.php";
require "class/Chevalier.php";
require "class/Capitaine.php";

/*$pierre = new Personnage("Pierre");
$pierre->move("Paris");*/

$paul = new Rodeur("Paul");
$paul->run("Paris");

$thomas = new Messager("Thomas");
$thomas->setSecret(" Pierre va à Narbonne ");
$thomas->deliverMessage( "Paris" );

$thomas->attack($paul);

$fred = new Soigneur("Frederic");
$fred->heal($paul);

$flo = new Archer("Florence");
$flo->move("Montpellier");
$flo->attack($paul);

$melvin = new Chevalier("Melvin");
$melvin->setShield(0.5);
$flo->attack($melvin);

$stephane = new Capitaine("Stephane");
$stephane->trainHero($fred);