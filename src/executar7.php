<?php



class Contador {
    public $valor = 0;

    function somar($quanto) {
        $this->valor = $this->valor + $quanto;
    }

    function mostrar() {
        echo "Valor: " . $this->valor . "\n";
    }
}

$a = new Contador();
$b = new Contador();

$a->somar(5);
$a->somar(3);
$b->somar(10);

$a->mostrar();
$b->mostrar();

