<?php

// Pegar como array, pois eu quero comparar linha a linha
$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    // uft8_decode
    // transforma a codificação utf-8 para iso-8859-1
    // observe que quando eu faço a abertura do arquivo 'cursos.csv' gerado
    // irá aparecer caracteres estranhos, pois o vscode trabalha com utf-8 e eu
    // estou tranformando para iso-8859-1, mas ao abri-lo no excel,
    // ficará correto
    $linha = [trim(utf8_decode($curso)), 'Sim'];
    //fwrite($arquivoCsv, implode(',', $linha));
    // a linha acima pode ser substituída por:
    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Não'];
    //fwrite($arquivoCsv, implode(',', $linha));
    // a linha acima pode ser substituída por:
    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);