<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once "autoload.php"; // com o autoload é possível utilizar todas as nossas classes

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('100.200.300-50'),
        'Sergio',
        new Endereco('SBC', 'Centro', 'Rua das Oliveiras', 100)
    )
);

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo!";
}