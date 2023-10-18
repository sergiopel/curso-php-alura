<?php

// array multidimensional (array dentro de array)
$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
    [
        'aluno' => 'Sergio',
        'nota' => 7,
    ],
];

function ordenaNotas(array $nota1, array $nota2): int
{
    // se o primeiro elemento precisar vir antes que a segundo,
    // retornar -1
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }
    //  se a segundo elemento precisar vir primeiro (antes) que a
    // segundo, retornar 1
    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    // se for igual, retornar 0
    return 0;
}

// usort é uma função de ordenação que espera 2 parâmetros, o primeiro
// parâmetro é o array e o segundo parâmetro é a função que ensina
// como será ordenado (ver documentação do usort).
// Pela função criada acima, vai ordenar em ordem decrescente.
usort($notas, 'ordenaNotas');
var_dump($notas);