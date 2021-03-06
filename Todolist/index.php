<?php
require "models/functions.php";
require "models/Note.php";
require "models/User.php";

session_start();

$autorisation = false;
if(isset($_SESSION["user"])){
    $user = $_SESSION["user"];

    if($user->isAdmin()){
        include "views/admin.php";
        $autorisation = true;
    }

}

readMessage();

switch( readPage() ) {

    case "profil":
        include "views/profil.php";
        break;

    case "inscription":
        include "views/inscription.php";
        break;

    case "noteupdate":
        $id_note = $_GET["noteid"];
        $note = new Note( $id_note );
        //$note = new Note("", "", "");
        //$note->id = $id_note;
        //$note->getById();
        include "views/noteupdate.php";
        break;

    case "users":
        if($autorisation) {
            include "views/users.php";
            break;
        }

    case "connection":
        include "views/connection.php";
        break;

    default : 
        include "views/connection.php";
        break;
}