<?php

echo "Olá mundo" . PHP_EOL;
print "Olá mundo 2" . PHP_EOL;

//OU:

$tela = fopen('php://stdout', 'w');
fwrite($tela, 'Olá mundo 3');
echo PHP_EOL;

$tela = fopen('php://stderr', 'w');
fwrite($tela, "\nSaída de erro");
echo PHP_EOL;
// ou simplesmente:
fwrite(STDERR, "\nOlá mundo 4");
fwrite(STDOUT, "\nOlá mundo 5");

//ler diretamente do arquivo e joga pra tela
echo PHP_EOL;
$cursos = fopen('zip://arquivos.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);