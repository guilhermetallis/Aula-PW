<?php
include 'conexao.php';

// Buscar clientes
$sqlClientes = "SELECT * FROM clientes";
$resultadoClientes = $conexao->query($sqlClientes);

// Buscar produtos
$sqlProdutos = "SELECT * FROM produtos";
$resultadoProdutos = $conexao->query($sqlProdutos);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Pedidos - Pizzaria</title>
</head>
<body>
    <h1>Sistema de Pedidos - Pizzaria</h1>

    <form action="comanda.php" method="post">

        <label for="cliente">Selecione o cliente:</label><br>
        <select name="cliente" id="cliente" required>
            <option value="">Selecione um cliente</option>
            <?php while($cliente = $resultadoClientes->fetch_assoc()) { ?>
                <option value="<?php echo $cliente['id']; ?>">
                    <?php echo $cliente['nome']; ?>
                </option>
            <?php } ?>
        </select>
        <br><br>

        <label for="produto">Selecione o produto:</label><br>
        <select name="produto" id="produto" required>
            <option value="">Selecione um produto</option>
            <?php while($produto = $resultadoProdutos->fetch_assoc()) { ?>
                <option value="<?php echo $produto['id']; ?>">
                    <?php echo $produto['nome']; ?> - R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
                </option>
            <?php } ?>
        </select>
        <br><br>

        <label for="quantidade">Digite a quantidade:</label><br>
        <input type="number" name="quantidade" id="quantidade" min="1" value="1" required>
        <br><br>

        <input type="submit" value="Fazer Pedido">

    </form>

    <br>
    <a href="historico.php">Ver Histórico de Pedidos</a>
</body>
</html>