<?php

// o namespace define a localização da classe, sendo que Alura\Banco é a raiz que eu defini
namespace Alura\Banco\Modelo;

abstract class Pessoa 
{
    
    use AcessoPropriedades;
    
    protected string $nome;
    private CPF $cpf;

	public function __construct(string $nome, CPF $cpf) {

		$this->validaNome($nome);
        $this->nome = $nome;
		$this->cpf = $cpf;
	}

	public function getNome() : string {
		return $this->nome;
	}

	public function getCpf() : string {
		return $this->cpf->getNumeroCpf();
	}

    // aqui o final impede que o método validaNome seja sobrescrito em outra classe
    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}