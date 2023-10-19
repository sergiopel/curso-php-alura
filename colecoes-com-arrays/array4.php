<?php

// Juntando listas
// Criando uma terceira lista juntando outras 2
$alunos2022 = [
    "Alice",
    "Amanda",
    "Carlos",
    "Eduardo",
    "Flávio",
];

$novosAlunos = [
    "Vanderson",
    "Geraldo",
    "Marta",
    "José",
];

$alunos2023 = array_merge($alunos2022, $novosAlunos);
var_dump($alunos2023);

//também poderia juntar usando o operador '+', mas funciona um pouco 
// diferente, pois se o segundo array tiver os mesmos índices do primeiro
// array, irá manter os elementos do primeiro array
var_dump($alunos2022 + $novosAlunos);

//outra forma de juntar é desempacotando os arrays,
// usando o '...', isso faz com que os elementos do array sejam 
// tratados individualmente, como se não tivessem colchetes entre eles
$alunos2023 = [...$alunos2022, ...$novosAlunos];
var_dump($alunos2023);
// posso inclusive acrescentar outro nome no meio
$alunos2023 = [...$alunos2022, 'Sergio', ...$novosAlunos];
var_dump($alunos2023);

// adicionar elemento(s) ao final do array
// 1a. forma - array_push:
array_push($alunos2023, 'Alice', 'Bob', 'Charlie');
var_dump($alunos2023);

//2a. forma - se quiser adicionar só 1 elemento ao final
$alunos2023[] = 'Juca';
var_dump($alunos2023);

// adicionar elemento(s) no início do array
array_unshift($alunos2023, 'Ricardo', 'Fábio');
var_dump($alunos2023);

// remove o primeiro elemento
echo array_shift($alunos2023);

// remove o último elemento
echo PHP_EOL . array_pop($alunos2023);

var_dump($alunos2023);

