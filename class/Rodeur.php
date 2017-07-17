<?php
class Rodeur extends Personnage {

    public function run($place) {
        $this->place = $place;
        echo "<p>".$this->name." cours vers ".$this->place."</p>";
    }

}