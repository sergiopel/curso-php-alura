<?php

//capturando uma substring de uma string
$email = 'sergio@comsistemas.com';
$senha = 'abc';

echo substr($email, 0, 6) . PHP_EOL; // pega da posição 0 até a 6
echo substr($email, 7). PHP_EOL; // pega da posição 9 até o final (se não informar a posição final

// pra ficar mais automático, melhor fazer assim:
$posicaoDoArroba = strpos($email, '@'); // buscar a posicao do arroba
echo substr($email, 0, $posicaoDoArroba) . PHP_EOL; 
echo substr($email, $posicaoDoArroba + 1). PHP_EOL;

// pegar o tamanho de uma string
echo strlen($senha) . PHP_EOL;

if (strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

// IMPORTANTE!!!
// A função strlen retorna o tamanho de uma string, mas não necessariamente retorna o número de caracteres!
// Mas como assim?
// É porque a função retorna o tamanho da string em BYTES!
// Então se eu colocar na senha um caractere acentuado ou cecedilha, por exemplo, cada um desses caracteres
// ocupará 2 bytes, e não refletirá o número de caracteres, portanto, exemplo:
$senha = 'Suíça';
echo strlen($senha) . PHP_EOL; // retorna tamanho 7 em bytes, mas são somente 5 caracteres

//Transformar string em letras maiúsculas
$usuario = substr($email, 0, $posicaoDoArroba);
echo strtoupper($usuario) . PHP_EOL;

//Transformar string em letras minúsculas
$email = 'Sergio@comsistemas.com';
$usuario = substr($email, 0, $posicaoDoArroba);
echo strtolower($usuario) . PHP_EOL;

//IMPORTANTE!
// As funções strtoupper e strtolower, por si só, não conseguem converter caracteres acentuados
// para maiúsculo ou minúsculo, respectivamente.
// Para resover podemos usar a extensão do php multibyte string (mbstring)
echo mb_strtoupper($senha) . PHP_EOL;

$senha = 'áéíóú';
// usando mb_strlen, agora considera realmente o número de caracteres
if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

