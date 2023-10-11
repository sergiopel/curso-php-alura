<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumeroCpf();
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    // método privado porque ele não pode ser chamado individualmente de fora da classe,
    // faz parte apenas da lógica da validação do nome do titular do construct.
    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}

