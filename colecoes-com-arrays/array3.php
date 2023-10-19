<?php 
// Comparação de Arrays (diferença de arrays)


$notasBimestre1 = [
    'Yara' => 5,
    'João' => 2,
    'Maria' => 0,
    'Roberto' => 7,
    'Vinicius' => 6,
    'Júlia' => 5,
];

$notasBimestre2 = [
    'Yara' => 5,
    'João' => 2,
    'Maria' => 1,
    'Pedro' => 0,
    'Roberto' => 7,
    'Vinicius' => 6,
];

// Retorna um novo array contendo todos os elementos do primeiro array, cujos VALORES não estejam no segundo array
var_dump(array_diff($notasBimestre1, $notasBimestre2));

// Retorna um novo array contendo todos os elementos do primeiro array, cujas CHAVES não estejam no segundo array
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// Retorna um novo array contendo todos os elementos do primeiro array, cujas CHAVES e VALORES não estejam no segundo array
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));


//outro exemplo:
$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$array3 = [1, 7, 13];

var_dump($diferenca = array_diff($array1, $array2, $array3));

//dessa diferença, pegar somente as chaves
echo "Apresenta só o nome dos alunos faltantes:" . PHP_EOL;
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes));

//dessa diferença, pegar somente os valores
echo "Apresenta só as notas dos alunos faltantes:" . PHP_EOL;
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_values($alunosFaltantes));

// tem ainda array_combine e array_flip