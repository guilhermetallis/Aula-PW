<?php

$idade = intval(readline("Digite a idade do nadador: "));

if ($idade < 5) {
    echo "Idade insuficiente para competir\n";
} elseif ($idade >= 5 && $idade <= 7) {
    echo "Infantil A\n";
} elseif ($idade >= 8 && $idade <= 10) {
    echo "Infantil B\n";
} elseif ($idade >= 11 && $idade <= 13) {
    echo "Juvenil A\n";
} elseif ($idade >= 14 && $idade <= 17) {
    echo "Juvenil B\n";
} else {
    echo "Adulto\n";
}

