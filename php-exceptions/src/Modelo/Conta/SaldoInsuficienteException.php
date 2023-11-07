<?php

namespace Alura\Banco\Modelo\Conta;

use DomainException;

class SaldoInsuficienteException extends DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual) // Sobreescrevi o método construtor da exceção
    {
        $mensagem = "Você tentou sacar $valorSaque, mas tem $saldoAtual em conta.";
        parent::__construct($mensagem);
    }

}