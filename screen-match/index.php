<?php

require __DIR__ . "/src/Model/Filme.php";

echo "Bem vindo(a) ao Screen Match!\n";

$filme = new Filme();
$filme->nome = "Thor - Ragnarok";
$filme->anoLancamento = 2021;
$filme->nota = 7.8;
$filme->genero = "Super-Heroi";

$filme->avalia(7.8);
$filme->avalia(8.0);
$filme->avalia(9.0);
$filme->avalia(6.5);

var_dump($filme);

echo $filme->media(); 
