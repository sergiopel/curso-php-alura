<?php 

namespace Alura\Banco\Modelo;

// Interface é uma classe abstrata com todos os métodos abstratos
// Então essa é a sintaxe e o método não precisa ser identificado como abstract, pois já é
// Quem implementa a interface, está assinando um contrato, obrigando a implementar o(s) método(s) dela
interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
