<?php

class Termometro {
    public $cidade;
    public $temperatura = 0;

    function registrar($valor) {
        $this->temperatura = $valor;
    }

    function aquecer($graus) {
        $this->temperatura = $this->temperatura + $graus;
    }

    function mostrar() {
        echo $this->cidade . ": " . $this->temperatura . " graus\n";
    }
}

$termometro = new Termometro();
$termometro->cidade = "Macapa";
$termometro->registrar(28);
$termometro->mostrar();
$termometro->aquecer(3);
$termometro->mostrar();
