<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    // forçando exceção, array só suporta 2 posições, mas estou tentando inserir na quarta posição
    // a execução é interrompida pq encontrou uma exeção RuntimeException
    /*
    try {
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3] = 'Valor';
    } catch (RuntimeException $problema) {
        echo "Aconteceu um erro na função 1" . PHP_EOL;
    }
    */
    // forçando erro de Divisão por zero
    // DivisionByZeroError
    //$divisão = intdiv(5, 0);
    
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $problema) { //verifica se encontrou essa exceção na funcao2()
      echo $problema->getMessage() . PHP_EOL;
      echo $problema->getLine() . PHP_EOL; // mostra a linha que ocorreu o problema
      // esse mostra a trilha de execução até chegar no erro:
      echo $problema->getTraceAsString() . PHP_EOL;
      //echo "Na função 1, eu resolvi o problema da função 2" . PHP_EOL;
//    } catch (DivisionByZeroError $erro) {
//        echo "Erro ao dividir um número por 0" . PHP_EOL;
        /*
        throw new RuntimeException(
        'Exceção foi tratada, mas, pega aí',
        1,
        $problema
        );
        */
    }
    
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    //$exception = new RuntimeException();
    // throw = lança exceção
    throw new RuntimeException('Essa é a mensagem de exceção lançada');

    // forçando erro de Divisão por zero
    // DivisionByZeroError
    //$divisão = intdiv(5, 0);

    // forçando exceção, array só suporta 2 posições, mas estou tentando inserir na quarta posição
    // a execução é interrompida pq encontrou uma exeção RuntimeException
    //$arrayFixo = new SplFixedArray(2);
    //$arrayFixo[3] = 'Valor';

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
