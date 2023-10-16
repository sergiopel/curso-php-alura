<?php 

// esse autoload faz o require_once automático de todas as minhas classes
spl_autoload_register(function (string $nomeCompletoDaClasse) {
    // Alura\Banco é o nosso namespace raíz e a nossa pasta raíz é o src
    // o objetivo é transformar:
    //Alura\Banco\Modelo\Endereco
    //em
    // src/Modelo/Endereco.php
    //echo $nomeCompletoDaClasse;
    //exit();
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});