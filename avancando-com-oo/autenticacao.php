<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();

$umDiretor = new Diretor('João da Silva', new Cpf('445.665.998-74'), 10000);

$umTitular = new Titular(new Cpf('100.411.699-90'), 'Juca Lima', new Endereco('SBC', 'Centro', 'Rua x', '1'));

$umGerente = new Gerente('Joana da Silva', new Cpf('455.615.998-73'), 10000);

$autenticador->tentaLogin($umDiretor, '1234');
$autenticador->tentaLogin($umGerente, '4321');
$autenticador->tentaLogin($umTitular, 'abcd');