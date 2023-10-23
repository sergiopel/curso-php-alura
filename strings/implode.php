<?php

// função implode faz o contrário, transforma um array em várias strings
$telefones = ['(24) 99999-9999', '(21) 88888-8888', '(11) 77777-7777'];

echo implode(PHP_EOL, $telefones) . PHP_EOL;
echo implode(',', $telefones) . PHP_EOL;
echo implode(', ', $telefones) . PHP_EOL;