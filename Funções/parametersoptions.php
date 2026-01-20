<?php

// Parâmetro opcional algum parâmetro com valor padrão, ou seja, já definido, esse é o $n3.

//em uma variável dentro de um parâmetro, antes dela, eu consigo definir, qual o tipo de valor q será retornado, por exemplo: int $n1.

function somar($n1, $n2 = 0, $n3 = 0)
{
  $total = $n1 + $n2 + $n3;
  return $total;
}

$x = somar(1);
//Valor de $n3, definido a baixo, porque na função, o valor 0 do $n3, é opcional
$y = somar(5, 3, 2);

$z = somar(7, 3);
echo $z;
