<?php

require_once __DIR__ . "/autoload.php";

use ScreenMatch\Model\{
    Filme,
    Serie,
    Genero,
    Episodio,
};

use ScreenMatch\Calculadora\{
    CalculadoraDeMaratona,
    ConversorNotaEstrela,
};

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
$serie->avalia(8);

$episodio = new Episodio($serie, "Episódio 1", 1);

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
echo "Duração total da maratona: " . $calculadora->duracao() . " minutos\n";

$conversor = new ConversorNotaEstrela();
echo "Média do série em estrelas: " . $conversor->converte($serie) . " estrelas\n";
echo "Media filme em estrelas: " . $conversor->converte($filme) . "\n";