<?php
class Stylo { //Nom de la classe (Stylo)

    private $marque; //propriété | attribut
    private $couleur; //propriété | attribut

    /*** GETTER ***/
    public function getMarque(){
        return $this->marque;
    }

    public function getCouleur(){
        return $this->couleur;
    }

    /*** SETTER ***/
    public function setMarque($marque){
        $this->marque = $marque;
    }

    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }

    
    public function __construct($marque, $couleur){ //lié a 'new'
        $this->marque = $marque;
        $this->couleur = $couleur;
    }

    public function ecrire($message) { //méthode
        echo "<p style='color:" . $this->couleur . "; font-family:" . $this->marque . ";' >" 
        . $message 
        . "</p>";
    }

    public function ecrireItalic( $message ) {
        echo "<i>";
        $this->ecrire($message);
        echo "</i>";
    }

    public function ecrireBold( $message ) {
        echo "<b>";
        $this->ecrire($message);
        echo "</b>";
    }


}