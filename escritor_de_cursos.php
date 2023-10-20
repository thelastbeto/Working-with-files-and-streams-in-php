<?php

$arquivo = fopen('filmesNovos2.txt', 'a');


$filme = ['Piratas do Caribe - A Maldição do Pérola Negra', PHP_EOL . 'Piratas do Caribe - O baú da Morte', PHP_EOL . 
 'Piratas do Caribe - No Fim do Mundo', PHP_EOL . 'Piratas do Caribe - Navegando em Águas Misteriosas', PHP_EOL . 
 'Piratas do Caribe - A vingança de Salazar'];

fwrite($arquivo, $filme[1]);

fclose($arquivo);


