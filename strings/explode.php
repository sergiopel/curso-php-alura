<?php

// se eu quero dividir uma string de forma mais fácil em um array,
// usando um separador, usa-se o 'explode'
$nome = 'Pedro Álvares Cabral';
var_dump(explode(' ', $nome));
// mas se eu já quiser atribuir à variáveis eu faço assim:
list($nome, $nomeDoMeio, $sobrenome) = explode(' ', $nome);
echo 'Nome: ' . $nome . PHP_EOL;
echo "Meio: $nomeDoMeio" . PHP_EOL;
echo "Sobrenome: $sobrenome" . PHP_EOL;

// armazenando em array um arquivo CSV (separador por vírgula)
$csv = 'Vinicius Dias,24,vinicius@alura.com.br';
var_dump(explode(',', $csv));
