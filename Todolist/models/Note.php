<?php 
require_once "functions.php";

class Note {

    public $id;
    public $user_id;
    public $title;
    public $description;

    public function __construct($id = 0){
        $this->id = $id;
        
        if( $id > 0){
            $this->getById();
        }
    }

    public function getById(){

        $pdo = getBdd();
        $prepared = $pdo->prepare("SELECT * FROM note WHERE id=:id");
        $prepared->execute(array(
            "id" => $this->id
        ));
        $result = $prepared->fetch(PDO::FETCH_ASSOC);
        $this->user_id = $result["user_id"];
        $this->title = $result["title"];
        $this->description = $result["description"];

    }

    public function create(){

        $pdo = getBdd();
        $prepared = $pdo->prepare( "INSERT INTO note SET user_id=:user_id, title=:title, description=:description" );
        $prepared->execute(array(
            'user_id' => $this->user_id,
            'title' => $this->title,
            'description' => $this->description
        ));
        
        // Recuperer le $this->id
        $this->id = $pdo->lastInsertId();

    }

    public function update(){

        $pdo = getBdd();
        $prepared = $pdo->prepare( "UPDATE note SET title=:title, description=:description WHERE id=:id" );
        $prepared->execute(array(
            'title' => $this->title,
            'description' => $this->description,
            'id' => $this->id
        ));

    }

    public function delete(){

        $pdo = getBdd();
        $prepared = $pdo->prepare( "DELETE note WHERE id=:id" );
        $prepared->execute(array(
            'id' => $this->id
        ));

    }
     
}