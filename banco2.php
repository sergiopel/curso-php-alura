<?php

/* Diferença do include e require:
    Com o include se não encontrar o arquivo a incluir, só dá um warning e tenta executar todo
    restante do código, podendo gerar vários erros
    Com o require, se não encontrar o arquivo já dá erro nesse require e não executa o restante do código
*/
//include 'funcoes.php';
//require 'funcoes.php';

// O require_once garante que o arquivo está sendo incluído somente uma vez e não dá erro se por
// engano tentarmos incluir novamente o mesmo arquivo mais abaixo
require_once 'funcoes.php';
require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

// excluindo uma variável qualquer da memória, ou remove um item de uma lista,
//podemos utilizar a função unset:
unset($contasCorrentes['123.456.689-11']);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {
    // a sintaxe abaixo é chamada de sintaxe de string complexa
    // se retirar as chaves em volta e os apóstrofes de titular e saldo, também funciona
    //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
    
    // tem outra forma de listar as contas correntes, com a função list:
    //list('titular' => $titular, 'saldo' => $saldo) = $conta;
    // o list acima pode ser simplificado assim:
    ['titular' => $titular, 'saldo' => $saldo] = $conta;    
    exibeMensagem("$cpf $titular $saldo");
}