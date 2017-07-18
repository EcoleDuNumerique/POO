<?php
abstract class Personnage {

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
        Display::move( $this->name." se deplace vers ".$this->place );
    }

    public function attack( Personnage $target ){ //On oblige $target a être un Personnage
        if( $this->place == $target->place ){
            Display::fight( $this->name . " attaque " . $target->name );
            $target->isHit( $this->power );
        }
        else {
             Display::fight( $target->name . " est trop loin !" );
        }
    }

    protected function isHit( $damage ){
        $this->health -= $damage;
        Display::fight(" Il reste " . $this->health . " à " . $this->name );
    }

    protected function isHeal( $power ){
        $this->health += $power;
         Display::fight( " Il reste " . $this->health . " à " . $this->name );
    }

}