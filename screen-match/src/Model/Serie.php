<?php

class Serie extends Titulo{

    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $numeroTemporadas,
        public readonly int $epPorTemporada,
        public readonly int $minutosPorEp,
    ) {
        parent::__construct($nome, $anoLancamento, $genero);
    }

    public function DuracaoEmMinutos(): int {
        return $this->numeroTemporadas * $this->epPorTemporada * $this->minutosPorEp;
    }
}