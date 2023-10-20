<?php

$arquivosFilmes = new SplFileObject('filmes.csv', 'r');

while(!$arquivosFilmes->eof())  //eof = enquanto não atingir o final;
{
    $linha = $arquivosFilmes->fgetcsv(';');

    echo $linha[0] . PHP_EOL;

}

$date = new DateTime();
$date->setTimestamp($arquivosFilmes->getCTime());

echo $date->format('d/m/Y');
