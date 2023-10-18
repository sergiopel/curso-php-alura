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

    // comparando com a função o ordem2.php, pode ser substituído
    // pelo operador 'nave espacial' (<=>)
    // ele faz a comparação de 2 valores
    // o resultado da comparação é um número inteiro que pode ser
    // -1, 0 ou 1, dependendo se o valor à esquerda é menor, igual ou
    // maior que o valor à direita, respectivamente
    return $nota2['nota'] <=> $nota1['nota'];
}

// usort é uma função de ordenação que espera 2 parâmetros, o primeiro
// parâmetro é o array e o segundo parâmetro é a função que ensina
// como será ordenado (ver documentação do usort).
// Pela função criada acima, vai ordenar em ordem decrescente.
usort($notas, 'ordenaNotas');
var_dump($notas);