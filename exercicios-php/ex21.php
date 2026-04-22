<?php

$altura = floatval(readline("Digite a altura (m): "));
$genero = strtoupper(trim(readline("Digite o gênero (M/F): ")));

if ($genero == "M") {
    $pesoIdeal = (72.7 * $altura) - 58;
} else {
    $pesoIdeal = (62.1 * $altura) - 44.7;
}

echo "Peso ideal: $pesoIdeal\n";

?>