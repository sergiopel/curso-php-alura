<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    // atributos:
    //private string $cpfTitular;
    //private string $nomeTitular;
    private Titular $titular;
    protected float $saldo;
    // O static diz que é um atributo da própria classe (não é da instância),
    // que para acessá-lo não será preciso usar o 'this', não precisa instanciar um objeto,
    // mas precisa ser do tipo 'private', senão eu consigo atribuir qualquer valor de fora
    // da classe. Mas como obter o valor dessa atributo de classe de fora da mesma?
    // Criando uma método static (da classe também)
    private static $numeroDeContas = 0;
  
    // Método mágico construtor.
    // Define valores por padrão toda vez que a classe for instanciada
    // podendo receber parâmetros, então eu estou inicializando os meus
    // atributos no momento da criação do objeto.
    // Então neste momento eu não preciso mais dos métodos setters que
    // definem o titular e o cpf do titular
    //public function __construct(string $cpfTitular, string $nomeTitular)
    public function __construct(Titular $titular)
    {
        # saldo da instância = 0
        $this->saldo = 0;
        $this->titular = $titular;
        # cpf do titular da instância = cpf do titular recebido por parâmetro
        //$this->cpfTitular = $cpfTitular;
        //$this->validaNomeTitular($nomeTitular);
        # nome do titular da instância = nome do titular recebido por parâmetro
        //$this->nomeTitular = $nomeTitular;

        // Para tantas quantas contas forem criadas, irá somar nessa variável (da classe) a soma
        // de todas as contas criadas.
        Conta::$numeroDeContas++;
    }

    // quando o php aciona o coletor de lixo e retira da memória instâncias que não tem referência
    // apontando pra ela, ou seja, quando uma instância deixa de existir na memória, entra nesse
    // método mágico __destruct e executa o que tiver nela
    public function __destruct()
    {
        self::$numeroDeContas--;   
    }

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
        
    }

    public function depositar(float $ValorADepositar): void
    {
        if ($ValorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $ValorADepositar;
    }

    /**
     * Get the value of saldo
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas(): int
    {
        //return Conta::$numeroDeContas;
        // eu posso substituir também o nome da classe 'Conta' pelo 'self':
        return self::$numeroDeContas;
    }

    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    // se eu quero obrigar que todas as minhas classes extendidas implementem esse método,
    // aqui precisa ser abstrato e, por consequencia, a classe deverá ser abstrata
    abstract protected function percentualTarifa(): float;

}

