<?php
class Archer extends Personnage {

    public function attack( Personnage $target ){

        Display::fight( $this->name . " tire sur " . $target->name );
        $target->isHit( $this->power );

    }

}