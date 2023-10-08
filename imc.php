<?php

# Calcular o IMC 
//$peso = 96;
//$altura = 1.85;

$peso = readline("Digite o seu peso: ");
$altura = readline("Digite a sua altura: ");
$imc = $peso / $altura ** 2;

echo "Peso: $peso, altura: $altura. IMC = $imc" . PHP_EOL;
if ($imc < 17){
    echo "Muito abaixo do peso";
} else if ($imc < 18.49){
    echo "Abaixo do peso";
} else if ($imc < 24.99){
    echo "Peso normal";
} else if ($imc < 29.99){
    echo "Acima do peso";
} else if ($imc < 34.99){
    echo "Obesidade I";
} else if ($imc < 39.99){
    echo "Obesidade II (severa)";
} else {
    echo "Obesidade III (mórbida)";
}