<?php

// arrays associativos
// quando não é associativo, implicitamente os índices são numéricos, começando do zero, 
// chamados de array numéricos
$conta1 = ['titular' => 'Sergio', 'saldo' => 1000];
$conta2 = ['titular' => 'Joao', 'saldo' => 2000];
$conta3 = ['titular' => 'Maria', 'saldo' => 3000];

$contasCorrentes = [
    $conta1,
    $conta2,
    $conta3
];

// 2a. forma, por exemplo, de pegar os titulares das contas
// usando o foreach
// se traduz como: "para cada"
// para cada conta corrente chamado de conta
foreach ($contasCorrentes as $conta){
    echo $conta['titular'] . PHP_EOL;
}

echo PHP_EOL;
// se eu tivesse contas correntes associativas, nada mudaria na sintaxe do foreach:
$contasCorrentes2 = [
    1234567890 => $conta1,
    1234567891 => $conta2,
    1234567892 => $conta3
];
foreach ($contasCorrentes2 as $conta){
    echo $conta['titular'] . PHP_EOL;
}

echo PHP_EOL;
// se eu quiser pegar o índice, que no caso está representado como cpf:
foreach ($contasCorrentes2 as $cpf => $conta){
    echo $cpf . PHP_EOL;
}

echo PHP_EOL;
// também daria pra definir o array de contas correntes assim:
$contasCorrentes3 = [
    1234567890 => [
        'titular' => 'Sergio',
        'saldo' => 1000
    ],
    1234567891 => [
        'titular' => 'Joao',
        'saldo' => 2000
    ],
    1234567892 => [
        'titular' => 'Maria',
        'saldo' => 3000
    ]
];
// se eu quiser pegar o índice, que no caso está representado como cpf:
foreach($contasCorrentes3 as $cpf => $conta){
    echo $cpf . PHP_EOL;
}
echo PHP_EOL;
// se eu quiser pegar os saldos
foreach($contasCorrentes3 as $cpf => $conta){
    echo $conta['saldo'] . PHP_EOL;
}

