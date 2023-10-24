<?php

//Ler entrada do teclado e gravar em cursos-php.txt
$teclado = fopen('php://stdin', 'r');
// a linha acima pode ser substituída pela constante STDIN, abaixo:
//$novoCurso = trim(fgets($teclado));
$novoCurso = trim(fgets(STDIN));
file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);

