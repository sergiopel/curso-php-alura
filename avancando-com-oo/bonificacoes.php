<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Gerente, Diretor, Desenvolvedor, EditorVideo};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Pedro',
    new Cpf('151.451.968-85'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Ana Júlia',
    new Cpf('125.321.654-96'),
    3000
);

$umDiretor = new Diretor(
    'Lúcio',
    new Cpf('144.455.477-85'),
    5000
);

$umEditor = new EditorVideo(
    'Sílvio',
    new Cpf('188.588.388-88'),
    1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
