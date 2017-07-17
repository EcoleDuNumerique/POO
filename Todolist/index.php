<?php
session_start();

require "models/functions.php";
require "models/User.php";

readMessage();

switch( readPage() ) {

    case "profil":
        include "views/profil.php";
        break;
    case "connection":
        include "views/connection.php";
        break;
    default : 
        include "views/connection.php";
        break;
}