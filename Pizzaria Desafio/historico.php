<?php
include 'conexao.php';

$sql = "SELECT 
            pedidos.id,
            clientes.nome AS cliente,
            produtos.nome AS produto,
            pedidos.quantidade,
            pedidos.valor_unitario,
            pedidos.valor_total,
            pedidos.data_pedido
        FROM pedidos
        INNER JOIN clientes ON pedidos.cliente_id = clientes.id
        INNER JOIN produtos ON pedidos.produto_id = produtos.id
        ORDER BY pedidos.id DESC";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Histórico de Pedidos</title>
</head>
<body>
    <h1>Histórico de Pedidos</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Valor Unitário</th>
            <th>Valor Total</th>
            <th>Data</th>
        </tr>

        <?php while($pedido = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $pedido['id']; ?></td>
            <td><?php echo $pedido['cliente']; ?></td>
            <td><?php echo $pedido['produto']; ?></td>
            <td><?php echo $pedido['quantidade']; ?></td>
            <td>R$ <?php echo number_format($pedido['valor_unitario'], 2, ',', '.'); ?></td>
            <td>R$ <?php echo number_format($pedido['valor_total'], 2, ',', '.'); ?></td>
            <td><?php echo $pedido['data_pedido']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <a href="index.php">Voltar para pedidos</a>
</body>
</html>