<?php

$notas = [
    'Yara' => 5,
    'João' => 2,
    'Maria' => null,
    'Roberto' => 7,
    'Vinicius' => 6,
];


//verificar se um aluno (chave) existe no array
// aqui são várias linhas e mais trabalhoso
/*
foreach ($notas as $aluno => $nota) {
    if ($aluno === 'Roberto'){
        return true;
    }
}
*/

///////////////////////////////////////////////
//
// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula
// 
///////////////////////////////////////////////

echo PHP_EOL;
// dá pra substituir por:
echo "Maria fez a prova? " . PHP_EOL;
var_dump(array_key_exists('Maria', $notas)); // retorna true pq a chave existe, no entanto ela não fez a prova

// então para verificar se a chave existe e se não está nulo:
var_dump(isset($notas['Maria'])); // retorna false, pois a chave 'Maria' existe, no entanto seu valor é nulo

var_dump(isset($notas['Yara']));

echo PHP_EOL . "Verificando se o valor existe:" . PHP_EOL;
// verificando agora se o valor existe no array:
echo "Alguém tirou 7" . PHP_EOL;
var_dump(in_array(7, $notas)); // retorna true

echo "Alguém tirou 3?" . PHP_EOL;
var_dump(in_array(3, $notas)); // retorna false

// verificar se um determinado valor existe no array, para retornar a sua chave:
echo "Quem tirou 7?" . PHP_EOL;
echo array_search(7, $notas) . PHP_EOL;

echo "Quem tirou 3?" . PHP_EOL;
var_dump(array_search(3, $notas));
