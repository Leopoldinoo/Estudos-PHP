<?php


$nome = 'otavio ';
$sobrenome = 'leopoldo';

// Usando a condição nullCAO na prática, caso a variável nome e sobrenome não exista, o código irá exibir visitante

$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? '';


echo $nomeCompleto;
