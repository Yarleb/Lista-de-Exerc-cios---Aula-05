<?php


class Jogador {
    public $nome;
    public $pontos = 0;

    function marcarPontos($quantos) {
        $this->pontos = $this->pontos + $quantos;
    }

    function zerar() {
        $this->pontos = 0;
    }

    function status() {
        echo $this->nome . ": " . $this->pontos . " pontos\n";
    }
}

$ana = new Jogador();
$ana->nome = "Ana";

$bruno = new Jogador();
$bruno->nome = "Bruno";

$ana->marcarPontos(10);
$ana->marcarPontos(5);
$bruno->marcarPontos(8);

$ana->zerar();

$ana->status();
$bruno->status();
