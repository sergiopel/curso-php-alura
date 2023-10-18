<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco1 = new Endereco('SP', 'Vila Carrão', 'Rua Dourada', '100');

$endereco2 = new Endereco('SP', 'Vila Ré', 'Rua Prateada', '200');

echo $endereco1 . PHP_EOL;
echo $endereco2 . PHP_EOL;

//echo $endereco1->rua;
//echo $endereco1->bairro;
//echo $endereco1->cidade;


