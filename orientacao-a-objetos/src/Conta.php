<?php

class Conta
{
    // atributos:
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
}

$primeiraConta = new Conta();
//var_dump($primeiraConta);

$primeiraConta = new Conta();
$primeiraConta->saldo = 200;
//var_dump($primeiraConta);

$primeiraConta->cpfTitular = '123.456.789.10';
//var_dump($primeiraConta);

$primeiraConta->nomeTitular = 'Sergio';
//var_dump($primeiraConta);

$segundaConta = new Conta();
$segundaConta->cpfTitular = '999.888.777-10';
$segundaConta->nomeTitular = 'João';
$segundaConta->saldo = 1000;
var_dump($segundaConta);

// a variável $c aponta para o mesmo endereço que a variável $segundaConta,
// então são referências a um mesmo objeto
$c = $segundaConta;
var_dump($c);