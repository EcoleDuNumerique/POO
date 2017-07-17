<?php
session_start();
require "../models/User.php";

if( isset( $_POST["email"] ) && isset( $_POST["password"] ) ){
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $user = new User( $email, $password );
    $logged = $user->login();

    if( $logged ) {
        header( "Location: ../index.php?page=profil" );
    }
    else {
        header( "Location: ../index.php?message='Impossible de se connecter'" );
    }

}