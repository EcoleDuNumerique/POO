<?php
require "class/Personnage.php";
require "class/Rodeur.php";
require "class/Messager.php";
require "class/Soigneur.php";

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