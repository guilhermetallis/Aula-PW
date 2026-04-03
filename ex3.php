<?php

$valor = floatval(readline("Digite o valor do produto: "));

$desconto = $valor * 0.15;
$novoValor = $valor - $desconto;

echo "Valor original: $valor\n";
echo "Valor com desconto: $novoValor\n";

