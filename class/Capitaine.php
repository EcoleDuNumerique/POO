<?php 
class Capitaine extends Personnage {

    public function trainHero( Entrainable $hero ){
        $hero->train();
        Display::training( "Entrainement" );
    }

}