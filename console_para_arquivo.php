<?php


$novoFilme = trim(fgets(STDIN));
file_put_contents('filmes.txt', "\n$novoFilme", FILE_APPEND); //FILE_APPEND para não sobrescrever o que vem antes;



