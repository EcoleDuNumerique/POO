<?php
class Messager extends Rodeur {

    private $secret;

    public function setSecret($message){
        $this->secret = $message;
    }

    public function deliverMessage($place){
        $this->run($place);
        Display::move( $this->name . " délivre le message : '" . $this->secret . "'" ); 
    }

}