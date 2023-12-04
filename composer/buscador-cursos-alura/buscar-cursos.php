<?php

// Após qualquer alteração no arquivo composer.json, é preciso executar
// "composer dumpautoload"
require 'vendor/autoload.php';

// Para o método abaixo funcionar, é preciso criar o classmap no autoload do composer.json, para
// identificar onde está essa classe solta, que não tem namespace, que não segue a PSR-4.
// Após criar o classmap no autoload do composer.json, será preciso rodar "composer dumpautoload"
Teste::metodo();

// Em sistemas legados eu posso ter também um arquivo de funções que eu queira que seja
// copiado para o meu projeto. Também podemos configurá-lo no autoload criando a entrada "files", no composer.json, após a inclusão, rodar "composer dumpautoload"
// O exemplo disso está no echo exibeMensagem, mais abaixo 

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\BuscadorDeCursos\Buscador;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

// Faz a requisição HTTP nativa, substituindo o GuzzleHttp
//$url = 'https://www.alura.com.br/cursos-online-programacao/php';
//$html = file_get_contents($url);

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

foreach($cursos as $curso) {
    echo exibeMensagem($curso);
}

