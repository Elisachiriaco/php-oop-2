<?php 
class User {
    protected $numero;
    protected $scadenza;
    protected $compra = [];

    function __construct($_numero, $_scadenza) {
        $this -> numero = $_numero;
        $this -> scadenza = $_scadenza;
    }

    public function setCompra($_compra) {
        $this -> compra[] = $_compra;
    }
    public function getCompra() {
        return $this -> compra;
    }

    public function setNumero($_numero) {
        $this -> numero = $_numero;
    }
    public function getNumero() {
        return $this -> numero;
    }

    public function setScadenza($_scadenza) {
        $year = date("Y");
        if($year > $_scadenza) {
            throw new Exception('Carta non valida');
        } else {
            $this -> scadenza = $_scadenza;
        }
    }
    public function getScadenza() {
        return $this -> scadenza;
    }
}
?>