<?php
require "models/functions.php";
require "models/User.php";

session_start();

readMessage();

switch( readPage() ) {

    case "profil":
        $user = $_SESSION['user'];
        include "views/profil.php";
        break;
    case "inscription":
        include "views/inscription.php";
        break;
    case "connection":
        include "views/connection.php";
        break;
    default : 
        include "views/connection.php";
        break;
}