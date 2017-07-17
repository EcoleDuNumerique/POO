<?php
class Soigneur extends Personnage {

    public function heal(Personnage $target){
        echo "<p>" . $this->name . " soigne " . $target->name . "</p>";
        $target->isHeal( $this->power );
    }

}