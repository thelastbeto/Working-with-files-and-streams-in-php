<?php

$meusFilmes = file('filmes.txt');
$meusFilmes2 = file('filmesNovos.txt');

$arquivoCsv = fopen('filmes.csv', 'w');

foreach ($meusFilmes as $filmes)
{
    $linha = [trim(($filmes)), 'Sim'];

    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($meusFilmes2 as $filmes2)
{
    $linha = [trim($filmes2), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);
