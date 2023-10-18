<?php

namespace Alura\Banco\Modelo;

//o 'final' impede a herança, ou seja, impede que outra class estenda  a classe Cpf
final class Cpf
{
    private string $numero;

    public function __construct(string $numero) {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }
        $this->numero = $numero;
    }
    
    public function getNumeroCpf(): string
    {
        return $this->numero;
    }

}