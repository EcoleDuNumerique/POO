<?php
require_once "functions.php";

class User {

    public $id;
    public $username;
    public $email;
    private $password;
    private $is_admin;

    public function __construct( $email, $password, $username = "", $is_admin = false ){

        $this->email = $email;
        $this->password = sha1($password);
        $this->username = $username;
        $this->is_admin = $is_admin;

    }

    public function setAdmin( $level ){
        if( $level != $this->is_admin) {

            $this->is_admin = $level;

            $pdo = getBdd();
            $prepared = $pdo->prepare("UPDATE FROM user SET is_admin=:level WHERE id=:id");
            $prepared->execute(array(
                'level' => $level,
                'id' => $this->id
            ));

            $this->setSession();
        }
    }

    public function isAdmin(){
        return $this->is_admin;
    }

    private function emailExist(){

        $pdo = getBdd();
        $prepared = $pdo->prepare("SELECT * FROM user WHERE email=:email");
        $prepared->execute(array(
            'email' => $this->email
        ));

        $userBdd = $prepared->fetch(PDO::FETCH_ASSOC);

        if( $userBdd ) {
            return $userBdd;
        }
        else {
            return false;
        }

    }

    public function inscription(){

        // Vérifier l'existence de l'email dans la base de donnée
        if( $this->emailExist() ){
            return false;
        }
            
        // Envoyer dans la base de donnée le nouvel utilisateur
        $pdo = getBdd();
        $prepared = $pdo->prepare( "INSERT INTO user SET email=:email, password=:password, username=:username" );
        $prepared->execute(array(
            'email' => $this->email,
            'password' => $this->password,
            'username' => $this->username
        ));
        
        // Recuperer le $this->id
        $this->id = $pdo->lastInsertId();

        return true;

    }

    public function login(){

        // Vérifie si l'utilisateur existe et si le mot de passe correspond
        $userBdd = $this->emailExist();
        if( $userBdd ) {

            if( $userBdd["password"] == $this->password ){

                $this->id = $userBdd["id"];
                $this->username = $userBdd["username"];
                $this->is_admin = $userBdd["is_admin"];

                // Créer la SESSION
                $this->setSession();
                return true;
            }
            else {
                return false;
            }

        }

    }

    private function setSession(){
        $_SESSION['user'] = $this;
    }

    public function logout(){

        //Coupe la SESSION

    }

    public function getNotes(){
        //Renvoie une liste de note
        
        $pdo = getBdd();
        $prepared = $pdo->prepare("SELECT * FROM note WHERE user_id=:user_id");
        $prepared->execute(array(
            "user_id" => $this->id
        ));
        $results = $prepared->fetchAll(PDO::FETCH_ASSOC);

        $notes = array(); //Sera mon tableau d'Objet
        foreach ( $results as $result ){

            //On créer nos objet a partir du résultat de la requête
            $note = new Note();
            $note->id = $result["id"];
            $note->title = $result["title"];
            $note->description = $result["description"];
            $note->user_id =  $result["user_id"];

            array_push( $notes, $note );
        }

        return $notes;

    }

    public static function getAll(){

        $pdo = getBdd();
        $prepared = $pdo->prepare("SELECT * FROM user");
        $prepared->execute();
        $results = $prepared->fetchAll(PDO::FETCH_ASSOC);

        $users = array(); //Sera mon tableau d'Objet
        foreach ( $results as $result ){

            //On créer nos objet a partir du résultat de la requête
            $user = new User("", "");
            $user->id = $result["id"];
            $user->email = $result["email"];
            $user->username = $result["username"];
            $user->is_admin =  $result["is_admin"];

            array_push( $users, $user );
        }

        return $users;

    }


}