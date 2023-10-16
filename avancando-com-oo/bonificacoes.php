<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    'Sergio',
    new Cpf('151.451.968-85'),
    'Programador',
    1000
);

$umaFuncionaria = new Gerente(
    'Ana Júlia',
    new Cpf('125.321.654-96'),
    'Gerente',
    3000
);

$umDiretor = new Diretor(
    'Lúcio',
    new Cpf('144.455.477-85'),
    'Diretor',
    5000
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
echo $controlador->recuperaTotal();
