<?php

namespace ScreenMatch\Model;

class Filme extends Titulo
{
    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
    ) {
        parent::__construct($nome, $anoLancamento, $genero);
    }

    #[\Override]
    public function DuracaoEmMinutos(): int {
        return $this->duracaoEmMinutos;
    }
}
