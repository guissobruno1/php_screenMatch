<?php

namespace ScreenMatch\Calculadora;

use ScreenMatch\Model\Titulo;

class CalculadoraDeMaratona {

    private int $duracaoMaratona = 0;
    public function inclui(Titulo $titulo): void 
    {
        $this->duracaoMaratona += $titulo->DuracaoEmMinutos();
    }

    public function duracao(): int 
    {
        return $this->duracaoMaratona;
    }
}