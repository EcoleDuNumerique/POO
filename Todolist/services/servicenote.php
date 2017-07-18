<?php
require "../models/Note.php";
require "../models/User.php";

session_start();

if( isset($_POST["title"]) && isset($_POST["description"]) ) {

    $title = $_POST["title"];
    $description = $_POST["description"];
    $user = $_SESSION["user"];

    $note = new Note( $user->id, $title, $description );
    $note->create();

    header("Location: ../index.php?page=profil");

}
else {
    header("Location: ../index.php?message=Formulaire imcomplet !");
}