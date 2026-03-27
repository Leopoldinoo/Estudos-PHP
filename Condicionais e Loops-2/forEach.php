<?php

$ingredientes = ['açucar', 'farinha', 'ovo', 'leite', 'fermento'];

// $chave: digita a posição do item no vetor
// $valor: digita o que tá escrito naquela posição do vetor

echo '<h2>Ingredientes</h2>';

foreach ($ingredientes as $chave => $valor) {
  echo "Item " . ($chave + 1) . ": " . $valor . "<br/>";
};

echo '<ul>';
foreach ($ingredientes as $valor) {
  echo '<li>' . $valor . '<li/>';
}
echo '<ul/>';
