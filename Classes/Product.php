<?php
    Class Product {
        protected $nome;
        protected $prezzo;
        protected $descrizione;

        function __construct($_nome,$_prezzo,$_descrizione)
        {
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->descrizione = $_descrizione;
        }

        public function setNome($_nome){
            $this-> nome = $_nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setPrezzo($_prezzo){
            $this-> prezzo = $_prezzo;
        }

        public function getPrezzo(){
            return $this-> prezzo;
        }

        public function setDescrizione($_descrizione){
            $this-> descrizione = $_descrizione;
        }

        public function getDescrizione(){
            return $this -> descrizione;
        }
    }
?>