<?php
require "class/Personnage.php";
require "class/Rodeur.php";
require "class/Messager.php";

$pierre = new Personnage("Pierre");
$pierre->move("Narbonne");

$paul = new Rodeur("Paul");
$paul->run("Paris");

$thomas = new Messager("Thomas");
$thomas->setSecret(" Pierre va à Narbonne ");
$thomas->deliverMessage( "Montpellier" );

$thomas->attack($paul);