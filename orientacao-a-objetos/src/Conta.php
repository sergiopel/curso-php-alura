<?php

class Conta
{
    // atributos:
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;
  

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
        
    }

    public function depositar(float $ValorADepositar): void
    {
        if ($ValorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $ValorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        } 

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);

    }




    /**
     * Get the value of cpfTitular
     */
    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    /**
     * Set the value of cpfTitular
     */
    public function setCpfTitular(string $cpfTitular): self
    {
        $this->cpfTitular = $cpfTitular;

        return $this;
    }

    /**
     * Get the value of nomeTitular
     */
    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    /**
     * Set the value of nomeTitular
     */
    public function setNomeTitular(string $nomeTitular): self
    {
        $this->nomeTitular = $nomeTitular;

        return $this;
    }

    /**
     * Get the value of saldo
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

}

