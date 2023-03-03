<?php
class User {
    private string $name;
    private string $surname;
    private string $password;
    private string $mail;
    function __construct(string $name,string $surname,$password,$mail ){
        $this->name = $name;
        $this->surname = $surname;
        $this->password = $password;
        $this->mail = $mail;
    }
    function getName() {
        return $this->name;
    }
    function getSurname() {
        return $this->surname;
    }

    function getMail() {
        return $this->mail;
    }
    function setSession(){
        session_start();
        $_SESSION["prenom"] = $this->getName();
        $_SESSION["nom"] = $this->getSurname();
    }
}

?>