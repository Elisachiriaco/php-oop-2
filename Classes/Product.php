<?php
    Class Product {
        public $nome;
        public $prezzo;
        public $descrizione;

        function __construct($_nome,$_prezzo,$_descrizione)
        {
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
            $this->descrizione = $_descrizione;
        }
    }
?>