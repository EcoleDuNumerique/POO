<?php
class Soigneur extends Personnage implements Entrainable {

    public function heal(Personnage $target){
        Display::fight( $this->name . " soigne " . $target->name );
        $target->isHeal( $this->power );
    }

    public function train(){
        $this->power += 1;
    }

}