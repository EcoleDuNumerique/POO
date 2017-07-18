<?php
require "../models/User.php";

if( isset( $_POST["email"] ) && 
    isset( $_POST["password"] ) 
    && isset( $_POST["username"] ) ){

    if( strlen($_POST["email"]) == 0 ||  strlen($_POST["password"]) == 0 ) {

        header("Location: ../index.php?message='Champs incomplets'");

    }
    else {

        $email = $_POST["email"];
        $password = $_POST["password"];
        $username = $_POST["username"];

        $user = new User( $email, $password, $username );
        $inscriptionSuccess = $user->inscription();

        if( $inscriptionSuccess ) {
            header("Location: ../index.php?page=connection&message='Inscription réussie'");
        }
        else {
            header("Location: ../index.php?page=inscription&message='Cet email existe déjà !'");
        }

    }

}
else {
    header("Location: ../index.php?message='Champs incomplets'");
}