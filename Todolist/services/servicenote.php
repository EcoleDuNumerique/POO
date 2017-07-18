<?php
require "../models/Note.php";
require "../models/User.php";

session_start();
if( isset($_POST["title"]) && isset($_POST["description"]) && isset($_GET['noteid']) ) {

    $note = new Note ( $_GET['noteid'] );
    $note->title = $_POST["title"];
    $note->description = $_POST["description"];
    $note->update();

    header("Location: ../index.php?page=profil");

}
else if( isset($_POST["title"]) && isset($_POST["description"]) ) {

    $title = $_POST["title"];
    $description = $_POST["description"];
    $user = $_SESSION["user"];

    $note = new Note();
    $note->title = $title;
    $note->description = $description;
    $note->user_id = $user->id;
    $note->create();

    header("Location: ../index.php?page=profil");

}
else {
    header("Location: ../index.php?message=Formulaire imcomplet !");
}