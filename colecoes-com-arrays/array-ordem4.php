<?php

$notas = [10, 8, 9, 7, 6];

// ordena em ordem decrescente
rsort($notas);
var_dump($notas);

// para rodar um sort, mantendo as chaves associativas,
// usar o arsort
// exemplo:

$notas2 = [
    'Yara' => 5,
    'João' => 2,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

var_dump($notas2);
arsort($notas2);
var_dump($notas2);

// ordenando pelas chaves na ordem crescente:
ksort($notas2);
var_dump($notas2);

// ordenando pelas chaves na ordem decrescente:
krsort($notas2);
var_dump($notas2);

