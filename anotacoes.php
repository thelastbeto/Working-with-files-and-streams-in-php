<?php

/* Conteúdo Inicial: Leitura de Arquivos.

Como abrir um arquivo com fopen
Como fechar um arquivo com fclose
Como ler uma linha com fgets ou fread
Como ler todo o conteúdo com file_get_contents ou file;


1. lendo linha a linha:
$arquivo = fopen('filmes.txt', 'r');
 
while(!feof($arquivo))
 {
     $curso = fgets($arquivo);
 }



2. Lendo todo o arquivo com uma função: 

$curso = file_get_contents('filmes.txt');

echo $curso; 

 3. Função File e File_get_contents:
file_get_contents devolve todo o conteúdo o arquivo como uma string. file devolve cada linha do arquivo como um item em um array
*/

/* Parte 2: Escrevendo em Arquivos:

w -> Cria um arquivo novo e, caso já existe, sobrescreve o antigo;
a-> Escreve ao final do arquivo apontado;
r+/a+/w+ -> Escrita e leitura;
r-> Leitura;

O modo r+ abre o arquivo para escrita e leitura e coloca o cursor no início do arquivo. Caso o arquivo não exista, retorna false;
O modo w+ abre o arquivo para escrita e leitura e coloca o cursor no início do arquivo. Caso o arquivo não exista, tenta criá-lo;

file_put_contents: Função para escrever no arquivo;

file_put_contents('filmesNovos.txt', $filme, FILE_APPEND); 

// FILE_APPEND = Não quero sobrescrever, apenas, 
escrever na linha abaixo;

Parte 3: Wrappers e Filtros:

Que o PHP trabalha com vários protocolos (através de wrappers) de streams
Como fazer uma requisição HTTP com o PHP, utilizando file_get_contents (mas também poderia ser com fread, por exemplo)
Como abrir e ler um arquivo ZIP
Como utilizar filtros com a função stream_filter_append
Como criar filtros próprios, estendendo a classe php_user_filter

wrapper: protocolo. Ex: http, zip, ftp.

** Com o wrapper php:// conseguimos acessar algumas informações do sistema como o teclado, a tela, um espaço temporário da memória, etc.

file:// Este é o wrapper para abrir arquivos locais
glob:// Este é o wrapper utilizado para buscar arquivos baseados em em alguns critérios.



Parte 4: Trabalhando no Console

Como ler dados do teclado ao utilizar o stream STDIN
Como escrever na tela como se o console fosse um arquivo, utilizando o STDOUT e STDERR
Como copiar dados diretamente de um stream para outro, com stream_copy_to_stream, poupando memória

Vimos que as constantes STDIN, STDOUT e STDERR nos ajudam com a manipulação de streams do sistema. Qual a vantagem de utilizarmos estas constantes?

R/ Não precisarmos explicitamente chamar o fopen para abrir os streams pois eles já estão abertos nestas constantes

5 - Contexto em streams:
Possível adicionar informações à leitura (ou escrita) de streams através de contextos
Função responsável para criar contextos é a stream_context_create
C wrapper de stream possui suas possíveis opções de contexto
Em http://, vimos como definir o método, cabeçalhos e conteúdo da requisição
Em zip://, nós aprendemos a definir a senha para abrir o arquivo

6- Funções específicas:

Como trabalhar com arquivos no formato CSV, utilizando as funções fputcsv e fgetcsv
Como ter acesso aos dados de diretórios, através da função dir, que nos retorna uma instância de Directory
Como tratar streams como objetos, através da classe SplFileObject
SPL significa Standard PHP Library, que é uma coleção de classes interfaces criadas com o propósito de resolver problemas comuns