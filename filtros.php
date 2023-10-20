<?php

require 'meufiltro.php';

$arquivo = fopen('filmes.txt', 'r');

stream_filter_register('alura.jogo', MeuFiltro::class);
stream_filter_append($arquivo, 'string.toupper');

$conteudo = fread($arquivo, filesize('filmes.txt'));
echo $conteudo;

fclose($arquivo);

