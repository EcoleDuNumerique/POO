<?php
class Archer extends Personnage {

    public function attack( Personnage $target ){

        echo "<p>" . $this->name . " tire sur " . $target->name . "</p>";
        $target->isHit( $this->power );

    }

}