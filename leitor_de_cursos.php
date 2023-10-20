<?php

//Vamos abrir o arquivo:
$arquivo = fopen('filmes.txt', 'r');

$tamanhoDoArquivo = filesize('filmes.txt'); //filesize = tamanho do arquivo;
$filmes = fread($arquivo, $tamanhoDoArquivo); // máximo = 128mb; //fread (Arquivo a ser lido, tamanho do arquivo);

echo $filmes;

fclose($arquivo);


