<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();
$umDiretor = new Diretor('João da Silva', new Cpf('445.665.998-74'), 10000);
$autenticador->tentaLogin($umDiretor, '1234');
