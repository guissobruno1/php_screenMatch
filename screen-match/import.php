<?php

$caminhoArquivo = __DIR__ . "/filme.json";
$recebeArquivo = file_get_contents($caminhoArquivo);
$filme = json_decode($recebeArquivo, true);

var_dump($filme);