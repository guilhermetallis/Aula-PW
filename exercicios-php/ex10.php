<?php

$valor = floatval(readline("Digite o valor da compra: "));

if ($valor > 500) {
    echo "Você ganhou um cupom de brinde para a próxima visita.\n";
} else {
    echo "Sem brinde.\n";
}

