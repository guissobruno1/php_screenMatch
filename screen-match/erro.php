<?php

use ScreenMatch\Calculadora\ConversorNotaEstrela;
use ScreenMatch\Model\Episodio;
use ScreenMatch\Model\Genero;
use ScreenMatch\Model\Serie;
use ScreenMatch\Exception\NotaInvalidaException;

require "autoload.php";

$serie = new Serie("Nome da Serie", "2023", Genero::Aventura, 10, 20, 30);
$episodio = new Episodio($serie, "Piloto", 1);

try
{
    $episodio->avalia(45);
    $episodio->avalia(-35);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio);
} catch (NotaInvalidaException $e) 
{
    echo "Erro ao avaliar o episódio: " . $e->getMessage();
}