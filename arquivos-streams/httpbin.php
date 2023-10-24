<?php

// Adicionando contexto, que são opções extras aos streams
// Por exemplo, opções de contexto para http:
// definir method, header, user_agent, content...

// Para testar iremos utilizar o site: httpbin.org
// Nele eu posso fazer requisições do todos os verbos http, onde as requisiçoes
// vão me retornar o que eu enviar pra garantir que a requisição está sendo
// feita corretamente

//Listar o que foi recebido da resposta da requisição

echo file_get_contents('http://httpbin.org/get');
// executei, não enviei nenhum cabeçalho a mais, só o host que é padrão e
// todas as requisições tem, não mandei nenhum argumento e não mandei nada
// no corpo
// retornou isso:
/*
{
    "args": {}, 
    "headers": {
      "Host": "httpbin.org", 
      "X-Amzn-Trace-Id": "Root=1-6537fbe3-04b8f3d752b3f63b09af3408"
    }, 
    "origin": "186.238.82.90", 
    "url": "http://httpbin.org/get"
}
*/

//Como implementar e adicionar contexto:
echo PHP_EOL;
$contexto = stream_context_create([
    'http' => [
        'method' => 'DELETE',
        'header' => 'X-From: PHP'
    ]
]);
echo file_get_contents('http://httpbin.org/delete', false, $contexto);

//testando agora com POST e content
echo PHP_EOL;
$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste do corpo da requisicao'
    ]
]);
echo file_get_contents('http://httpbin.org/post', false, $contexto);