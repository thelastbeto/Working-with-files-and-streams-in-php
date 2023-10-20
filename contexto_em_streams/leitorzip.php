<?php

$contexto = stream_context_create(
    ["zip"=> [
        'password' => 'senha'
    ]]);

echo file_get_contents('zip://C:\Users\Microcity\Desktop\php\contexto_em_streams\php.zip#filmes.txt', 
false, 
$contexto);
