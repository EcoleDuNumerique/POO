<?php
class Distributeur {

    public $canettes;
    private $monnaie;
    private $code;

    public function __construct ( $canettes, $monnaie, $code = 1234 ) {
        
        $this->canettes = $canettes;
        $this->monnaie = $monnaie;
        $this->code = $code;

    }

    public function getMonnaie( $code ){

        if( $code == $this->code ){
            return $this->monnaie;
        }

    }

    public function addMonnaie( $code, $monnaie ) {

        if( $code == $this->code ) {
            $this->monnaie += $monnaie;
        }

    }

    public function acheter( $somme ) {

        if( $somme >= 1 ){
            echo "<p> Prenez votre canette </p>";
            $this->canettes -= 1;
            $this->monnaie += 1;

            if($somme > 1){
                $this->rendreMonnaie( $somme - 1 );
            }

        }
        else {
            echo "<p> Il n'y a pas assez d'argent </p>";
            $this->rendreMonnaie( $somme );
        }

    }

    private function rendreMonnaie( $somme ){

        echo "<p> Monnaie rendue :" . $somme . " Euros </p>";

    }



}