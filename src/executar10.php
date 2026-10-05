<?php


class ContaBancaria {
    public $titular;
    public $banco;
    public $saldo = 0;

    function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
    }

    function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Saldo insuficiente para " . $this->titular . "\n";
        } else {
            $this->saldo = $this->saldo - $valor;
        }
    }

    function mostrarExtrato() {
        echo "Titular: " . $this->titular . "\n";
        echo "Banco: " . $this->banco . "\n";
        echo "Saldo: R$ " . $this->saldo . "\n";
        echo "----------------------\n";
    }
}

$conta1 = new ContaBancaria();
$conta1->titular = "Ana";
$conta1->banco = "Banco do Brasil";

$conta2 = new ContaBancaria();
$conta2->titular = "Bruno";
$conta2->banco = "Caixa";

$conta1->depositar(500);
$conta1->sacar(120);

$conta2->depositar(200);
$conta2->sacar(350);

echo "=== EXTRATOS ===\n";
$conta1->mostrarExtrato();
$conta2->mostrarExtrato();
