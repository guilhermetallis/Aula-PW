<?php

$salario = floatval(readline("Digite o salário atual: "));

if ($salario <= 1500) {
    $percentual = 0.15;
} elseif ($salario <= 3000) {
    $percentual = 0.10;
} else {
    $percentual = 0.05;
}

$aumento = $salario * $percentual;
$novoSalario = $salario + $aumento;

echo "Salário antigo: $salario\n";
echo "Percentual de aumento: " . ($percentual * 100) . "%\n";
echo "Novo salário: $novoSalario\n";

