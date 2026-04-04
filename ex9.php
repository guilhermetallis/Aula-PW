<?php

$saldo = floatval(readline("Digite o saldo da conta: "));

if ($saldo < 0) {
    echo "Atenção: Seu saldo está negativo!\n";
} else {
    echo "Positivo\n";
}

