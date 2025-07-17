<?php

namespace ScreenMatch\Exception;

class NotaInvalidaException extends \InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct("A nota deve estar entre 0 e 10.");
    }
}