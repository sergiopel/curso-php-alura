<?php

// lê o conteúdo de algum arquivo compactado (zip)
// compactei os arquivos cursos-php.txt e lista-cursos.txt em arquivos.zip
// são os chamados wrappers (protocolos)
echo file_get_contents('zip://arquivos.zip#lista-cursos.txt');



// lê o conteúdo de algum arquivo compactado (zip)
// compactei os arquivos cursos-php.txt e lista-cursos.txt em arquivos-com-senha.zip (AGORA TEM SENHA NO ZIP)
// são os chamados wrappers (protocolos)
echo PHP_EOL . PHP_EOL;
// pra conseguir já atribuir a senha na leitura, é preciso atribuir um contexto
$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
    ]);
echo file_get_contents('zip://arquivos-com-senha.zip#lista-cursos.txt', false, $contexto);
// eu também consigo usar o contexto em 'fopen'

/*
Nesta aula, aprendemos:

Que é possível adicionar informações à leitura (ou escrita) de streams através de contextos
Que a função responsável para criar contextos é a stream_context_create
Que cada wrapper de stream possui suas possíveis opções de contexto
Em http://, vimos como definir o método, cabeçalhos e conteúdo da requisição
Em zip://, nós aprendemos a definir a senha para abrir o arquivo
*/