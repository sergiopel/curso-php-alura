<?php

// substituições nas strings

//exemplo, substituir palavrões por asteriscos
$texto = 'Texto com qualquer coisa, bosta e merda';
echo str_replace(['bosta', 'merda'], '***', $texto) . PHP_EOL; //parâmetros: o que, pelo o que, onde
//ou:
echo str_replace(['bosta', 'merda'], ['b', 'm'], $texto) . PHP_EOL; //parâmetros: o que, pelo o que, onde

// pode-se usar também a função strtr:
echo strtr($texto, ['bosta' => 'b', 'merda' => 'm']) . PHP_EOL;
