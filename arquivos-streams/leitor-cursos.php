<?php

$arquivo = fopen('lista-cursos.txt', 'r');

//lendo  linha por linha até o final
while (!feof($arquivo)) {
    $curso = fgets($arquivo);
    echo $curso;
}

fclose($arquivo);

//lendo o arquivo inteiro de uma vez só
echo PHP_EOL . PHP_EOL . PHP_EOL;
$arquivo = fopen('lista-cursos.txt', 'r');
// se o arquivo for muito grande, o ideal é ler linha a linha, como 
// o exemplo acima
$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);
echo $cursos;
fclose($arquivo);

// para facilitar, existe a função file_get_contents
// ela já abre o arquivo, busca todo o conteúdo do arquivo,
// retornar como uma string e fecha o arquivo
echo PHP_EOL . PHP_EOL . 'Usando função file_get_contents:' . PHP_EOL;
$cursos = file_get_contents('lista-cursos.txt');
echo $cursos;

//ler todo o conteúdo do arquivo, de modo que cada linha do arquivo 
// seja armazenado em itens de um array
echo PHP_EOL . PHP_EOL . 'Cada linha do arquivo em array:' . PHP_EOL;
$cursos = file('lista-cursos.txt');
var_dump($cursos);