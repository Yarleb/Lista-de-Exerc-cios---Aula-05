<?php

class Retangulo {
    public $largura;
    public $altura;

    function calcularArea() {
        echo "Area: " . ($this->largura * $this->altura) . "\n";
    }

    function calcularPerimetro() {
        echo "Perimetro: " . (2 * $this->largura + 2 * $this->altura) . "\n";
    }
}

$retangulo1 = new Retangulo();
$retangulo1->largura = 5;
$retangulo1->altura = 3;

$retangulo2 = new Retangulo();
$retangulo2->largura = 10;
$retangulo2->altura = 2;

$retangulo1->calcularArea();
$retangulo1->calcularPerimetro();
$retangulo2->calcularArea();
$retangulo2->calcularPerimetro();
