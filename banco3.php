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
require_once 'funcoes3.php';
require_once 'funcoes3.php';

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

/*
echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){ ?>
        <dt><h3><?= $conta['titular'];?> - <?= $cpf;?></h3></dt>
        <dd>Saldo: <?= $conta['saldo'];?></dd>
        <?php } ?>
    </dl>

</body>
</html>