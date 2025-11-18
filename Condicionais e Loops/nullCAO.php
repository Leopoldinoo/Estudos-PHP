<?php


$nome = 'otavio ';
$sobrenome = 'leopoldo';

// Usando a condição nullCAO na prática, caso a variável sobrenome não exista, o código irá exibir somente o nome na tela

$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? '';


echo $nomeCompleto;
