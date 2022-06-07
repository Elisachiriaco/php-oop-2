<?php
require_once __DIR__ ."/User.php";

class Premium extends User {
    protected $nome;
    protected $cognome;
    protected $email;
    protected $sconto;

    function __construct($_numero, $_scadenza, $_nome, $_cognome, $_email, $_sconto) {
        parent::__construct($_numero, $_scadenza);
        $this -> nome = $_nome;
        $this -> cognome = $_cognome;
        $this -> email = $_email;
        $this -> sconto = $_sconto;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function getMail(){
        return $this->email;
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }

    public function setCognome($_cognome){
        $this->cognome = $_cognome;
    }

    public function setMail($_email){
        if(!strpos($_email,'@')){
            throw new Exception('Email non valida!');
        }
        $this->email = $_email;
    }

    public function setSconto($_sconto) {
        $this -> sconto = $_sconto;
    }
    public function getSconto() {
        return $this -> sconto;
    }
}

?>