<?php
    $produto = $_POST['cxproduto'];
    $cod = $_POST['cxcodigo'];
    $estoque = array('coca cola', 'pizza margherita', 'pizza pepperoni', 'pizza vegetariana');
    $cliente = array(
        ['João', 'Maria', 'Pedro', 'Ana'],
        ['guilherme', 'lucas', 'marcos', 'fernanda']
        );
        echo "cliente: " , $cliente[0][0] , "<br/>";
        echo "produto: " , $estoque[$produto];
?>