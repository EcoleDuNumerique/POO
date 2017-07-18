<?php
class Soigneur extends Personnage implements Entrainable {

    public function heal(Personnage $target){
        echo "<p>" . $this->name . " soigne " . $target->name . "</p>";
        $target->isHeal( $this->power );
    }

    public function train(){
        $this->power += 1;
    }

}