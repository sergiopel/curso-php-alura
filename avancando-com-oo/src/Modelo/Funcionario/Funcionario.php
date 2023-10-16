<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, Cpf};

// Funcionario é muito genérico e não pode ser instanciado,
// então por isso virou classe abstrata
abstract class Funcionario extends Pessoa
{

    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario) {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0){
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    // todas classes que extenderem Funcionario, são obrigadas a
    // implementar o método calculaBonificacao
    abstract public function calculaBonificacao(): float;
}