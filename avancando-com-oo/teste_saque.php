<?php

/*
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
*/
// se eu tiver várias classes do mesmo namespace, eu também posso agrupar dessa forma:
use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
/*
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
*/
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta1 = new ContaCorrente(new Titular(new Cpf('100.200.300-56'), 'Sergio', new Endereco('SBC', 'Centro', 'Rua x', '200')));
$conta1->depositar(500);
$conta1->sacar(100);
echo $conta1->getSaldo();
