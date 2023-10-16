<?php

// o namespace define a localização da classe, sendo que Alura\Banco é a raiz que eu defini
namespace Alura\Banco\Modelo;

abstract class Pessoa 
{
    protected string $nome;
    private CPF $cpf;

	public function __construct(string $nome, CPF $cpf) {

		$this->validaNomeTitular($nome);
        $this->nome = $nome;
		$this->cpf = $cpf;
	}

	public function getNome() : string {
		return $this->nome;
	}

	public function getCpf() : string {
		return $this->cpf->getNumeroCpf();
	}

    // método privado porque ele não pode ser chamado individualmente de fora da classe,
    // faz parte apenas da lógica da validação do nome do titular do construct.
    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}