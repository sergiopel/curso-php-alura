<?php

$frutas = ['banana', 'maça', 'abacate', 'pera', 'uva', 'melancia'];

$notas2 = [
    'Yara' => 5,
    'João' => 2,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

$lista = [
    0 => 'dado',
    1 => 'peão',
    3 => 'tabuleiro'
];

// verificar tipo da variável
echo gettype($notas2) . PHP_EOL;

// uma função para verificar se uma variável é um array
if (is_array($notas2)){
    echo "Sim, é um array" . PHP_EOL;
}

// a partir da versão 8.1
// função para verificar se é um array é numérico, ou seja, 
// se todas as suas chaves são números e são sequenciais
// obs.: se eu criar um array e definir manualmente suas chaves
// numéricas, e se alguma não for sequencial e se não começar do 0, retornará false
var_dump(array_is_list($notas2)); // retorna false
var_dump(array_is_list($frutas)); // retorna true (chaves numéricas implícitas)
var_dump(array_is_list($lista)); // retorna false se chaves numéricas estiverem fora de ordem





