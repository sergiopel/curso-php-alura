<?php

require_once 'src/Conta.php';

$contaUm = new Conta();
var_dump($contaUm);

$contaUm->depositar(300);

$contaUm->sacar(100);
var_dump($contaUm);

$contaUm->depositar(350);
var_dump($contaUm);

$contaDois = new Conta();
$contaUm->transferir(250, $contaDois);
var_dump($contaUm);
var_dump($contaDois);

echo $contaUm->getSaldo() . PHP_EOL;
echo $contaDois->getSaldo();

$contaUm->setNomeTitular("Dunha");
$contaUm->setCpfTitular("100.200.300.50");
var_dump($contaUm);

