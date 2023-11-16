<?php

// criando classe que não segue o PSR-4, não tem nenhum namespace
// foi feito para testar o classmap no autolad do composer.json

class Teste
{
    public static function metodo()
    {
        echo "Teste";
    }
}

class Teste2
{
    public static function metodo()
    {
        echo "Teste2";
    }
}