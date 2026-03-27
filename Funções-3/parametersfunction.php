<?php

// Parâmetros de função, a função utiliza de duas variavéis dentro do seu parênteses, para criar um parâmetro.

function somar($n1, $n2)
{
  $total = $n1 + $n2;
  return $total;
}

// a variável soma, nos retorna, o valor de cada variavél dentro da nosssa função somar, assim, fazendo com que a função somar, faça a soma dos números.

$soma = somar(10, 5);

echo "Total: " . $soma . "<br/>";

$x = somar(1, 3);
$y = somar(5, 3);

$w = somar($x, $y);
echo "Total: " . $w;
