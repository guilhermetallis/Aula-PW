<?php

$valor = floatval(readline("Digite o valor da compra: "));

if ($valor <= 200) {
    $desconto = $valor * 0.05;
} else {
    $desconto = $valor * 0.10;
}

$total = $valor - $desconto;

echo "Valor original: $valor\n";
echo "Desconto: $desconto\n";
echo "Total a pagar: $total\n";

