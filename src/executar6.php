<?php


class Produto {
    public $nome;
    public $preco;

    function aumentarPreco($valor) {
        $this->preco = $this->preco + $valor; 
    }

    function mostrar() {
        echo $this->nome . " custa R$ " . $this->preco . "\n";
    }
}

$produto = new Produto();
$produto->nome = "Caderno"; 
$produto->preco = 10; 
$produto->aumentarPreco(5); 
$produto->mostrar(); 