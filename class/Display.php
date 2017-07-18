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

    public static function debug( $value ){
        echo "<pre>";
        if( is_array( $value ) ){
            print_r( $value );
        }
        else {
            var_dump( $value );
        }
        echo "</pre>";
    }

}