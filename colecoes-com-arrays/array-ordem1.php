<?php 

$notas = [
    10,
    8,
    9,
    7
];

$notasOrdenadas = $notas;
// ordena pela ordem crescente dos números ou ordem alfabética
sort($notasOrdenadas);

echo 'Desordenadas:';
var_dump($notas);

echo 'Ordenadas:';
var_dump($notasOrdenadas);

// o exemplo abaixo dá erro, pois precisa ser passado por referência
//sort([3, 5, 2]);