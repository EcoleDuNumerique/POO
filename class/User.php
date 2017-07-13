<?php
class User {

    public $id;
    public $username;
    public $email;
    private $password;

    public function __construct( $email, $password ){

        $this->email = $email;
        $this->password = $password;

    }

    public function inscription(){

        // Vérifier l'existence de l'email dans la base de donnée
        // Envoyer dans la base de donnée le nouvel utilisateur
        // Recuperer le $this->id

    }

    public function login(){

        // Vérifie si l'utilisateur existe et si le mot de passe correspond
        // Créer le SESSION ID

    }

    public function writeToDo(){

        // Ecrire une note dans la base de donnée

    }

    public function logout(){

        //Coupe la SESSION

    }

}