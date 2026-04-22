<?php

$media = floatval(readline("Digite a média do aluno: "));

if ($media >= 7) {
    echo "Parabéns, você foi aprovado!\n";
} else {
    echo "Não foi aprovado\n";
}

?>