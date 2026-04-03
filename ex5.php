<?php

$salario = floatval(readline("Digite o salário fixo: "));
$vendas = floatval(readline("Digite o total vendido: "));

$comissao = $vendas * 0.05;
$salarioFinal = $salario + $comissao;

echo "Salário final: $salarioFinal\n";

