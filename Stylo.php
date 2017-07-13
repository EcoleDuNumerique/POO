<?php
class Stylo { //Nom de la classe (Stylo)

    public $marque; //propriété | attribut
    public $couleur; //propriété | attribut

    public function ecrire($message) { //méthode
        echo "<p>" . $message . "</p>";
    }


}