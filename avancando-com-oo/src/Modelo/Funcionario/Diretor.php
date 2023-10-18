<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Autenticavel;

// extendo Funcionario e implemento a interface Autenticavel
// só posso extender de uma classe, mas mosso implementar quantas interfaces eu quiser
class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }

}