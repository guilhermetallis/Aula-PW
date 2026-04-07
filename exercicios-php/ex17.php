<?php

$idade = intval(readline("Digite a idade: "));

if ($idade < 16) {
    echo "Não pode votar\n";
} elseif (($idade >= 16 && $idade <= 17) || $idade > 70) {
    echo "Voto opcional\n";
} else {
    echo "Voto obrigatório\n";
}

