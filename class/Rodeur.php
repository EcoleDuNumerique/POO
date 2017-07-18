<?php
class Rodeur extends Personnage {

    public function run($place) {
        $this->place = $place;
        Display::move( $this->name." cours vers ".$this->place );
    }

}