<?php

$distancia = floatval(readline("Digite a distância percorrida (km): "));
$combustivel = floatval(readline("Digite o total de combustível gasto (litros): "));

if ($combustivel > 0) {
    $consumo = $distancia / $combustivel;
    echo "Consumo médio: $consumo km/l\n";
} else {
    echo "Valor de combustível inválido\n";
}

?>