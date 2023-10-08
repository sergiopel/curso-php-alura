<?php

date_default_timezone_set('America/Sao_Paulo');
echo date("d/m/Y");
echo PHP_EOL;
// mostrando hora, minuto, segundo
echo date("H:i:s") . PHP_EOL;
// data e hora, na mesma variável
$data = date("d/m/Y H:i:s");
echo $data;