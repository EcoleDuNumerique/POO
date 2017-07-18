<?php 
class Chevalier extends Personnage implements Entrainable {

    private $shield;

    public function setShield( $value ){
        $this->shield = $value;
    }

    protected function isHit( $damage ) {
        $damage -= $this->shield;
        
        //appelle le isHit du parent, avec la valeur de $damage redefinie
        parent::isHit( $damage ); 
    }

    public function train(){
        $this->shield += 0.5;
    }

}