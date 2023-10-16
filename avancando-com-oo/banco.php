<?php

// os require_once dos nossos arquivos (classes) agora estão sendo definidos automaticamente pelo autoload.php
// então aqui eu preciso fazer o require_once somente do autoload.php
require_once 'autoload.php';


/*
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
require_once 'src/Endereco.php';
*/

// para utilizar uma classe precisamos importá-la utilizando o use
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;


$endereco = new Endereco("SBCampo", "Centro", "Rua São Bernardo", "100");
$contaUm = new Conta(new Titular(new Cpf('100.300.900-69'), 'João da Silva', $endereco));
$contaUm->depositar(3000);
$contaUm->sacar(300);

echo "Conta 1" . PHP_EOL;
echo $contaUm->getNomeTitular() . PHP_EOL;
echo $contaUm->getCpfTitular() . PHP_EOL;
echo $contaUm->getSaldo() . PHP_EOL;
var_dump($contaUm);

// Agora não consigo mais criar a conta sem passar os argumentos,
// o editor já aponta erro
//$contaDois = new Conta();

echo PHP_EOL;
echo "Conta 2" . PHP_EOL;

// aqui eu subdividi só pra demonstrar que dá pra fazer separado também
$cpfMaria = new Cpf('145.658.968-32');
$maria = new Titular($cpfMaria, 'Maria Aparecida da Silva', $endereco);
$contaDois = new Conta($maria);
echo $contaDois->getNomeTitular() . PHP_EOL;
echo $contaDois->getCpfTitular() . PHP_EOL;
echo $contaDois->getSaldo() . PHP_EOL;

echo PHP_EOL;
echo "Conta 3" . PHP_EOL;
$outroEndereco = new Endereco("A", "b", "c", "1");
$contaTres = new Conta(new Titular(new Cpf('146.758.168-34'), 'Eliseu', $outroEndereco));
echo $contaTres->getNomeTitular() . PHP_EOL;
echo $contaTres->getCpfTitular() . PHP_EOL;
echo $contaTres->getSaldo() . PHP_EOL;

echo PHP_EOL . 'Número de contas criadas: ' . Conta::recuperaNumeroDeContas() . PHP_EOL;

//agora vou apagar a referência a uma instância, deixando-a sem referência, perdida na memória, para
// que o coletor de lixo (garbadge colector) entre em ação e execute o método mágico __destruct
// na classe Conta:
unset($contaDois);

echo PHP_EOL . 'Número de contas criadas: ' . Conta::recuperaNumeroDeContas() . PHP_EOL;
