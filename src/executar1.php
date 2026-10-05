<?php

class Livro {
    public $titulo;
    public $autor;
    public $paginas;
}

$livro = new Livro();
$livro->titulo = "Dom Casmurro";
$livro->autor = "Machado de Assis";
$livro->paginas = 256;

echo $livro->titulo . "\n";
echo $livro->autor . "\n";
echo $livro->paginas . " paginas\n";
