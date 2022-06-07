<?php 

    Class User {
        protected $nome;
        protected $cognome;
        protected $email;


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
            if(strpos($_email,'@')){
                throw new Exception('Email non valida!');
            }
            $this->email = $_email;
        }
    }
?>