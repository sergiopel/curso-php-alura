<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
} 

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

// observar que se eu colocar o 'e' comercial (&), antes da $conta, eu estou passando a conta
// por referência, que é a própria conta, o endereço da conta, e não uma cópia, com isso, a alteração
// para maiúsculo do titular se refletirá na conta original e não na cópia
// observe também que neste caso eu não preciso do return ao final e na chamada da função eu também
// não preciso atribuir o resultado à conta (veja no banco2.php)
function titularComLetrasMaiusculas(array &$conta)
{
    // Se der erro na execução do mb_strtoupper, será preciso habilitar uma biblioteca
    // a qual essa função está incluída. Habilitar em php.ini:
    // - procurar por mbstring, quando aparecer a linha ;extension=mbstring, é só retirar o ; para habilitá-la
    // - procurar por extension_dir e quando aparecer a linha ;extension_dir = "ext" (On Windows), é só retirar
    //   o ; para habilitá-la
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta; // essa é a sintaxe do list
    //echo "<li>Titular: $conta[titular] . Saldo: {$conta['saldo']}</li>";
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}