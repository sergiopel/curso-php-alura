<?php

// arrays associativos
$conta1 = ['titular' => 'Sergio', 'saldo' => 1000];
$conta2 = ['titular' => 'Joao', 'saldo' => 2000];
$conta3 = ['titular' => 'Maria', 'saldo' => 3000];

$contasCorrentes = [$conta1, $conta2, $conta3];

// 1a. forma, por exemplo, de pegar os titulares das contas
for ($i = 0; $i < count($contasCorrentes); $i++){
     echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}