<?php
class Personnage {

    /* On peut utiliser protected qui agit comme un private mais est
    quand même accessible pour les sous-classes */
    public $name;  
    public $health;
    public $power;
    public $place;
    
    public function __construct($name, $health = 10, $power = 1, $place = "Perpignan"){

        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
        $this->place = $place;

    }

    public function move( $place ){
        $this->place = $place;
        echo "<p>".$this->name." se deplace vers ".$this->place."</p>";
    }

    public function attack( Personnage $target ){ //On oblige $target a être un Personnage
        if( $this->place == $target->place ){
            echo "<p>" . $this->name . " attaque " . $target->name . "</p>";
            $target->isHit( $this->power );
        }
        else {
            echo "<p>" . $target->name . " est trop loin !" . "</p>";
        }
    }

    private function isHit( $damage ){
        $this->health -= $damage;
        echo "<p> Il reste " . $this->health . " à " . $this->name . "</p>";
    }

    protected function isHeal( $power ){
        $this->health += $power;
         echo "<p> Il reste " . $this->health . " à " . $this->name . "</p>";
    }

}