<?php

require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Calculadora/CalculadoraDeMaratona.php";

echo "Bem vindo(a) ao Screen Match!\n";

$filme = new Filme(
    "Carros",
    2006,
    Genero::SuperHeroi,
    180
);

$filme->avalia(7.8);
$filme->avalia(8.0);
$filme->avalia(9.0);
$filme->avalia(6.5);

var_dump($filme); 

echo $filme->anoLancamento . "\n";

$serie = new Serie(
    "The Flash",
    2014,
    Genero::SuperHeroi,
    10,
    20,
    45,
);

var_dump($serie) . "\n";

echo $serie->anoLancamento . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);

echo "Duração total da maratona: " . $calculadora->duracao() . " minutos\n";