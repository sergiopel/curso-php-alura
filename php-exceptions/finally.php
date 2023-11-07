<?php

try {
    echo "Executando" . PHP_EOL;
    throw new Exception("Exceção aqui"); // throw lança exceção
} catch (Throwable $e) {                 // catch = pega exceção
    echo "Caindo no catch" . PHP_EOL;
} finally {
    echo "Cai aqui no Finally sempre" . PHP_EOL; //bloco finally sempre executa, mas não é obrigatório ter
}


/*
$arquivo = fopen('temp.txt', 'w');
try {
    fwrite($arquivo, 'Qualquer coisa');
} catch (Throwable $e) {
    echo "Erro ao escrever no arquivo" . PHP_EOL;
} finally {
    fclose($arquivo);
}
*/

// Um exemplo prático seria quando precisar executar o que está no finally, mesmo se no try e no catch tiver retorno
function a(): int
{
    try {
        echo "Código";
        throw new Exception();
        return 0;
    } catch (Throwable $e) {
        echo "Problema";
        return 1;
    } finally {
        echo "Final da função";
    }
}

echo a();