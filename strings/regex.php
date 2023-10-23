<?php

//expressões regulares
// o site https://regex101.com mostra a explicação das expressões regulares

$telefones = ['(21) 98899-1111', '(14) 99999-9999', '(11) 92523-7777'];

foreach($telefones as $telefone){
    $telefoneValido = preg_match(
        '/^(\([0-9]{2}\)) 9?[0-9]{4}-[0-9]{4}$/',
        $telefone,
        $correspondencia
    );
    echo $correspondencia[1] . PHP_EOL;
    if ($telefoneValido){
        echo "Telefone válido" . PHP_EOL;
    } else {
        echo "Telefone inválido" . PHP_EOL;
    }

    //substituir
    echo preg_replace(
        '/^\(([0-9]{2})\) (9?[0-9]{4}-[0-9]{4})$/',
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}