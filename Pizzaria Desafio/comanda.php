<?php
// pega os dados do formulário
$codigo = $_POST['cxcodigo'];
$codigoProduto = $_POST['cxproduto'];
$quantidade = $_POST['cxqtd'];

// lista de clientes
$clientes = array(
    1 => "Guilherme",
    2 => "Joyjoy",
    3 => "Milena",
    4 => "Maria",
    5 => "Fernanda",
    6 => "Pedro",
    7 => "Luiza",
    8 => "Rafael"
);

// lista de produtos
$produtos = array(
    1 => array('nome' => 'Pizza de Queijo', 'preco' => 35.00),
    2 => array('nome' => 'Pizza de Calabresa', 'preco' => 40.00),
    3 => array('nome' => 'Pizza de Frango', 'preco' => 45.00),
    4 => array('nome' => 'Coca-Cola', 'preco' => 8.00)
);

// Verifica se o cliente existe
if (isset($clientes[$codigo])) {
    $nomeCliente = $clientes[$codigo];
} else {
    $nomeCliente = 'Cliente não encontrado';
}

// Verifica se o produto existe
if (isset($produtos[$codigoProduto])) {
    $nomeProduto = $produtos[$codigoProduto]['nome'];
    $valorUnitario = $produtos[$codigoProduto]['preco'];
} else {
    $nomeProduto = 'Produto não encontrado';
    $valorUnitario = 0;
}

// Valor total do pedido
$total = $valorUnitario * $quantidade;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comanda do Pedido</title>
</head>
<body>
    <h1>Comanda do Pedido</h1>

    <p><strong>Cliente:</strong> <?php echo $nomeCliente; ?></p>
    <p><strong>Produto:</strong> <?php echo $nomeProduto; ?></p>
    <p><strong>Quantidade:</strong> <?php echo $quantidade; ?></p>
    <p><strong>Valor Unitário:</strong> R$ <?php echo number_format($valorUnitario, 2, ',', '.'); ?></p>
    <p><strong>Valor Total:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>

    <br>
    <a href="index.php">Fazer novo pedido</a>
</body>
</html>