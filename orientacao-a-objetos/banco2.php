<?php

require_once 'src/Conta.php';

$contaUm = new Conta('100.300.900-69', 'João da Silva');
$contaUm->depositar(3000);
$contaUm->sacar(300);

echo "Conta 1" . PHP_EOL;
echo $contaUm->getNomeTitular() . PHP_EOL;
echo $contaUm->getCpfTitular() . PHP_EOL;
echo $contaUm->getSaldo() . PHP_EOL;

// Agora não consigo mais criar a conta sem passar os argumentos,
// o editor já aponta erro
//$contaDois = new Conta();

echo PHP_EOL;
echo "Conta 2" . PHP_EOL;
$contaDois = new Conta('145.658.968.32', 'Maria Aparecida da Silva');
echo $contaDois->getNomeTitular() . PHP_EOL;
echo $contaDois->getCpfTitular() . PHP_EOL;
echo $contaDois->getSaldo() . PHP_EOL;

echo PHP_EOL;
echo "Conta 3" . PHP_EOL;
$contaTres = new Conta('146.758.168.34', 'Eliseu');
echo $contaTres->getNomeTitular() . PHP_EOL;
echo $contaTres->getCpfTitular() . PHP_EOL;
echo $contaTres->getSaldo() . PHP_EOL;

echo PHP_EOL . 'Número de contas criadas: ' . Conta::recuperaNumeroDeContas() . PHP_EOL;

//agora vou apagar a referência a uma instância, deixando-a sem referência, perdida na memória, para
// que o coletor de lixo (garbadge colector) entre em ação e execute o método mágico __destruct
// na classe Conta:
unset($contaDois);

echo PHP_EOL . 'Número de contas criadas: ' . Conta::recuperaNumeroDeContas() . PHP_EOL;
