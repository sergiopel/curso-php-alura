<?php

// Criar filtro personalizado
// Nesse exemplo eu devo ler o arquivo 'lista-cursos.txt' e só considerar
// as linhas que tenham a palavra 'parte ou Parte' para serem gravados
// em um novo arquivo
class MeuFiltro extends php_user_filter
{
    public $stream;

    public function onCreate(): bool
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing): int
    {
        $saida = '';
        while ($bucket = stream_bucket_make_writeable($in)) {
            $linhas = explode("\n", $bucket->data);

            foreach ($linhas as $linha) {
                if (stripos($linha, 'parte') !== false) {
                    $saida .= "$linha\n";
                }
            }
        }

        $bucketSaida = stream_bucket_new($this->stream, $saida);
        stream_bucket_append($out, $bucketSaida);

        return PSFS_PASS_ON;
    }
}