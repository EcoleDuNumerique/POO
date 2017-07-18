<?php 
class Display { //classe utilitaire

    public static function move( $msg ){
        echo "<p style='color: green;'>" . $msg . "</p>";
    }

    public static function fight( $msg ){
        echo "<p style='color: red;'>" . $msg . "</p>";
    }

    public static function training( $msg ){
        echo "<p style='color: blue;'>" . $msg . "</p>";
    }

}
// ********************** 
class Bdd {

    private static $pdo = null;

    public static function getBdd(){

        if( self::$pdo == null ) {

            self::$pdo = new PDO( "mysql:host=localhost;dbname=todolist", "root", "root");
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        
        }
        
        return self::$pdo;
    }

}

Bdd::getBdd();

Bdd::getBdd();
Bdd::getBdd();
Bdd::getBdd();