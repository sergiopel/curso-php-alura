<?php

// manipulando textos com PHP

//procurar uma palavra dentro de uma string, podemos utilizar a função
//str_contains que foi disponibilizada na versão 8.0 do PHP
$nome = 'Pedro Álvares Cabral';

$palavraAProcurar = 'Álvares';
$encontrou = str_contains($nome, $palavraAProcurar);
if ($encontrou){
    echo "A palavra $palavraAProcurar exite na string $nome";
} else {
    echo "A palavra $palavraAProcurar não exite na string $nome";
}

// Como eu faria para procurar uma palavra numa string antes da versão 8.0 ?
// Eu precisaria utilizar uma função que retorna a posição