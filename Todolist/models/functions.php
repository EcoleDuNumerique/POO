<?php
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