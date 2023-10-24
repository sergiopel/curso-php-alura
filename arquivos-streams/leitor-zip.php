<?php

// lê o conteúdo de algum arquivo compactado (zip)
// compactei os arquivos cursos-php.txt e lista-cursos.txt em arquivos.zip
// são os chamados wrappers (protocolos)
echo file_get_contents('zip://arquivos.zip#lista-cursos.txt');
