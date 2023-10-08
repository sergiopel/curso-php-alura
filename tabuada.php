<?php

# mostra a tabuada dos números 1 a 9

for($i = 1; $i <= 9; $i++){
    echo "Tabuada do número $i" . PHP_EOL;
    for($j = 1; $j <= 10; $j++){
        echo "$i x $j = " . $i * $j . PHP_EOL;
    }
}