<?php

$peso = floatval(readline("Digite o peso (kg): "));
$altura = floatval(readline("Digite a altura (m): "));

if ($altura > 0) {
    $imc = $peso / ($altura * $altura);
    echo "IMC: $imc\n";

    if ($imc < 18.5) {
        echo "Abaixo do peso\n";
    } else {
        echo "Peso normal ou acima\n";
    }
} else {
    echo "Altura inválida\n";
}

