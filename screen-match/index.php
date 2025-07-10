<?php

require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Model/Filme.php";

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

echo $filme->anoLancamento;