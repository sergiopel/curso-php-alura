<?php

/*
// inserir cursos em um novo arquivo
// nessa sintaxe sempre irá sobrepor algum conteúdo que já existia,
// se o arquivo não existir, cria um novo
$arquivo = fopen('cursos-php.txt', 'w');
$curso = 'Design Patterns PHP I: Boas práticas de programação';
// posso gravar só uma parte usando como terceiro parâmetro
// da função fwrite, o tamanho, se eu não colocar nada grava 
// o conteúdo total da string $curso
fwrite($arquivo, $curso);
fclose($arquivo);

// se eu quiser acrescentar um conteúdo, eu tenho que abrir o arquivo
// no modo 'a' de append
$arquivo = fopen('cursos-php.txt', 'a');
$curso = "\nDesign Patterns PHP II: Boas práticas de programação";
fwrite($arquivo, $curso);
fclose($arquivo);
*/

//modo fácil de incluir linhas em um arquivo usando 'file_put_contents'
$curso = 'Design Patterns PHP I: Boas práticas de programação';
file_put_contents('cursos-php.txt', $curso);
// se eu quiser acrescentar
$curso2 = "\nDesign Patterns PHP II: Boas práticas de programação";
file_put_contents('cursos-php.txt', $curso2, FILE_APPEND);