<?php

$n1 = floatval(readline("Digite a primeira nota: "));
$n2 = floatval(readline("Digite a segunda nota: "));

$media = ($n1 + $n2) / 2;

echo "Média: $media\n";

if ($media >= 7) {
    echo "Aprovado\n";
} else {
    echo "Reprovado\n";
}

?>