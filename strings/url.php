<?php

$url = 'https://alura.com.br';

// função para verificar se a minha string começa com ...
var_dump(str_starts_with($url, 'https')); // novidade do PHP 8

if (str_starts_with($url, 'https')) {
   echo 'É uma URL segura';
} else {
   echo 'Não é uma URL segura';
}

echo PHP_EOL;

 // agora se eu quiser saber se a minha string termina com ...
if(str_ends_with($url, '.br')) {  // novidade do PHP 8
   echo 'É um domínio do Brasil';
} else {
   echo 'Não é um domínio do Brasil';
}

