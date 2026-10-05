<?php

class Lampada {
    public $estado = "desligada";

    function ligar() {
        $this->estado = "ligada";
    }

    function desligar() {
        $this->estado = "desligada";
    }

    function status() {
        echo "A lampada esta " . $this->estado . "\n";
    }
}

$lampada = new Lampada();
$lampada->status();
$lampada->ligar();
$lampada->status();
$lampada->desligar();
$lampada->status();
