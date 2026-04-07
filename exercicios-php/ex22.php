<?php

$saldo = floatval(readline("Digite o saldo atual: "));
$saque = floatval(readline("Digite o valor do saque: "));

$limite = 500;

if ($saque <= $saldo) {
    $novoSaldo = $saldo - $saque;
    echo "Novo Saldo: $novoSaldo\n";
} else {
    $totalDisponivel = $saldo + $limite;

    if ($saque <= $totalDisponivel) {
        echo "Saque realizado com uso do limite\n";
        $novoSaldo = $saldo - $saque;
        echo "Novo Saldo: $novoSaldo\n";
    } else {
        echo "Saldo Insuficiente\n";
    }
}

