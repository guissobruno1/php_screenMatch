<?php

use ScreenMatch\Calculadora\ConversorNotaEstrela;
use ScreenMatch\Model\Episodio;
use ScreenMatch\Model\Genero;
use ScreenMatch\Model\Serie;

require "autoload.php";

$serie = new Serie("Nome da Serie", "2023", Genero::Aventura, 10, 20, 30);
$episodio = new Episodio($serie, "Piloto", 1);

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($episodio);