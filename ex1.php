<?php

$n1 = floatval(readline("Digite a primeira nota: "));
$n2 = floatval(readline("Digite a segunda nota: "));
$n3 = floatval(readline("Digite a terceira nota: "));
$n4 = floatval(readline("Digite a quarta nota: "));

$media = ($n1 + $n2 + $n3 + $n4) / 4;

echo "Média: $media\n";

if ($media >= 7) {
    echo "Aprovado\n";
} elseif ($media >= 5 && $media <= 6.9) {
    echo "Recuperação\n";
} else {
    echo "Reprovado\n";
}

