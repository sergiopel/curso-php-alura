<?php

$email = ' atendimento@comsistemas.com ';

//quero retirar os espaços em branco do início e fim
echo trim($email) . PHP_EOL;

// para aparar (retirar) outros caracteres, é só informar o parâmetro
$email = ',.atendimento@comsistemas.com.';
echo trim($email, '.,') . PHP_EOL;

// aparar somente do lado esquerdo da string
echo ltrim($email, '.,') . PHP_EOL;

// aparar somente do lado direito da string
echo rtrim($email, '.,') . PHP_EOL;

