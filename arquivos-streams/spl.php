<?php

$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');
    // no programa arquivos-para-csv.php eu usei o 'utf8_decode' para
    // transformar utf-8 para iso-8859-1 para que o Excel entenda corretamente,
    // mas ao exibir aqui na tela, é preciso voltar ao que era, usando o 
    // utf8_encode (voltando para utf-8) para exibir corretamente
    echo utf8_encode($linha[0]) . PHP_EOL;
    // ver a extensão mbstring
}

// Para exibir quando o arquivo foi criado
$date = new DateTime();
$date->setTimestamp($arquivoCursos->getCTime());

echo $date->format('d/m/Y');

/*
Nesta aula, aprendemos:

Como trabalhar com arquivos no formato CSV, utilizando as funções fputcsv e fgetcsv
Como ter acesso aos dados de diretórios, através da função dir, que nos retorna uma instância de Directory
Como tratar streams como objetos, através da classe SplFileObject
SPL significa Standard PHP Library, que é uma coleção de classes interfaces criadas com o propósito de resolver problemas comuns
Você pode conferir mais detalhes sobre a SPL aqui: https://www.php.net/manual/en/book.spl.php
*/