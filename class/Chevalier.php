<?php 
class Chevalier extends Personnage {

    private $shield;

    public function setShield( $value ){
        $this->shield = $value;
    }

    protected function isHit( $damage ) {
        $damage -= $this->shield;

        //appelle le isHit du parent, avec la valeur de $damage redefinie
        parent::isHit( $damage ); 
    }
    

}