<?php

$n1 = floatval(readline("Digite o primeiro número: "));
$n2 = floatval(readline("Digite o segundo número: "));

if ($n1 > $n2) {
    echo "O maior é: $n1\n";
} elseif ($n2 > $n1) {
    echo "O maior é: $n2\n";
} else {
    echo "Os dois são iguais\n";
}

?>