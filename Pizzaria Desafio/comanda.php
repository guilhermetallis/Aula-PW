<?php
include 'conexao.php';

// Recebe os dados do formulário
$clienteId = $_POST['cliente'];
$produtoId = $_POST['produto'];
$quantidade = $_POST['quantidade'];

// Buscar cliente
$sqlCliente = "SELECT * FROM clientes WHERE id = $clienteId";
$resultadoCliente = $conexao->query($sqlCliente);
$cliente = $resultadoCliente->fetch_assoc();

// Buscar produto
$sqlProduto = "SELECT * FROM produtos WHERE id = $produtoId";
$resultadoProduto = $conexao->query($sqlProduto);
$produto = $resultadoProduto->fetch_assoc();

$nomeCliente = $cliente['nome'];
$nomeProduto = $produto['nome'];
$valorUnitario = $produto['preco'];
$total = $valorUnitario * $quantidade;

// Salvar pedido no banco
$sqlPedido = "INSERT INTO pedidos (cliente_id, produto_id, quantidade, valor_unitario, valor_total)
              VALUES ($clienteId, $produtoId, $quantidade, $valorUnitario, $total)";

if ($conexao->query($sqlPedido) === TRUE) {
    $mensagem = "Pedido salvo com sucesso!";
} else {
    $mensagem = "Erro ao salvar pedido: " . $conexao->error;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comanda do Pedido</title>
</head>
<body>
    <h1>Comanda do Pedido</h1>

    <p><strong>Cliente:</strong> <?php echo $nomeCliente; ?></p>
    <p><strong>Produto:</strong> <?php echo $nomeProduto; ?></p>
    <p><strong>Quantidade:</strong> <?php echo $quantidade; ?></p>
    <p><strong>Valor Unitário:</strong> R$ <?php echo number_format($valorUnitario, 2, ',', '.'); ?></p>
    <p><strong>Valor Total:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>

    <p><strong>Status:</strong> <?php echo $mensagem; ?></p>

    <br>
    <a href="index.php">Fazer novo pedido</a><br>
    <a href="historico.php">Ver histórico</a>
</body>
</html>