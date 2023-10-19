<?php

// list() - atribuir elementos de um array a variáveis
$dados = ['Sergio', 10, 51];
list($nome, $nota, $idade) = $dados;
var_dump($nome, $nota, $idade);

// eu também poderia atribuir à variáveis dessa forma:
[$nome, $nota, $idade] = $dados;
var_dump($nome, $nota, $idade);

//se for um array associativo, ficaria assim:
$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;
var_dump($nome, $nota, $idade);

// em substituição existe uma função poderosa que em uma única linha
// eu consigo extrair as chaves e valores do array já atribuindo à
// variáveis que são criadas com o mesmo no me da chave:
$dados2 = [
    'nome' => 'Cláudio',
    'nota' => 9,
    'idade' => 34,
];

extract($dados2);
var_dump($nome, $nota, $idade);

// a função compact faz o contrário, pega variáveis e cria array com a chave sendo o nome da variável e o valor o conteúdo da variável:
var_dump(compact('nome', 'nota', 'idade'));


//depois quando tiver um tempinho, passar pelo curso de programação funcional, onde é explicado em detalhes as funções mais icônicas quando o assunto é array em PHP, são array_map, array_filter e array_reduce
