<?php
/**/
function getBdd(){
    $pdo = new PDO( "mysql:host=localhost;dbname=todolist", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;
}
/**/

function readPage(){

    if( isset( $_GET['page'] ) ){
        $page = $_GET['page'];
    }
    else {
        $page = "connection";
    }

    return $page;

}

function readMessage(){

    if( isset( $_GET['message'] ) ){
        echo $_GET['message'];
    }

}