<?php


class Livro {
    public $titulo;
    public $autor;
    public $paginas;
}

$livro1 = new Livro();
$livro1->titulo = "Dom Casmurro";
$livro1->autor = "Machado de Assis";
$livro1->paginas = 256;

$livro2 = new Livro();
$livro2->titulo = "O Alienista";
$livro2->autor = "Machado de Assis";
$livro2->paginas = 96;

echo $livro1->titulo . "\n";
echo $livro1->autor . "\n";
echo $livro1->paginas . " paginas\n";
echo "\n";
echo $livro2->titulo . "\n";
echo $livro2->autor . "\n";
echo $livro2->paginas . " paginas\n";


