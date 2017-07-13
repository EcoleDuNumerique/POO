<?php
/**/
function getBdd(){
    $pdo = new PDO( "mysql:host=localhost;dbname=todolist", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
}
/**/
class User {

    public $id;
    public $username;
    public $email;
    private $password;

    public function __construct( $email, $password, $username = "" ){

        $this->email = $email;
        $this->password = sha1($password);
        $this->username = $username;

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
            echo "<p> Cet email est déjà utilisé </p>";
            return;
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

    }

    public function login(){

        // Vérifie si l'utilisateur existe et si le mot de passe correspond
        $userBdd = $this->emailExist();
        if( $userBdd ) {

            if( $userBdd["password"] == $this->password ){

                $this->id = $userBdd["id"];
                $this->username = $userBdd["username"];

                // Créer la SESSION
                $_SESSION['user'] = $this;
                
            }
            else {
                echo "<p> Wrong password ! </p>";
            }

        }

    }

    public function writeToDo(){

        // Ecrire une note dans la base de donnée

    }

    public function logout(){

        //Coupe la SESSION

    }

}