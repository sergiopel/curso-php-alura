<?php

function geraEmail(string $nome): void
{
    // heredoc é equivalente a aspas duplas (não precisa colocar) e nowdoc é equivalente a aspas simples
    //$conteudoEmail = <<<'FIM'
    $conteudoEmail = <<<FIM
    Olá, $nome!

    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}

    FIM;

    echo $conteudoEmail;
}

geraEmail('Sergio');