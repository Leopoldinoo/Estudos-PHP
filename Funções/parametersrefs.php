<?php
function somar($n1, $n2, &$total)
{
  $total = $n1 + $n2;
}
// O que acontece na função, fica na função.
// O símbolo & significa que está passando a variável por referência, e não por valor, assim alterando, tanto ela internamente, quanto a quem ela se refere externamente.
$x = 3;
$y = 2;
$soma = 0;
// $x e $y estão substituindo os valores de $n1 e $n2.
somar($x, $y, $soma);
//$soma está retornando os valores de x e y, e não as variavéis.
echo $x . ' + ' . $y . ' = ' . $soma;

// sort($var), ordena o nosso array, ou seja, faz com que os números dentro do nosso array, sejam escritos em ordem crescente, do menor pro maior.

$lista = [4, 9, 2];

sort($lista);

print_r($lista);
