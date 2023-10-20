<?php

$filmes = fopen('zip://filmes.zip#filmes.txt', 'r');
stream_copy_to_stream($filmes, STDOUT);
