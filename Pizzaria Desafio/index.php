<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos - Pizzaria</title>
</head>
<body>
    <h1>Sistema de Pedidos - Pizzaria</h1>

    <form action="comanda.php" method="post">

        Digite o código do cliente:<br>
        <input type="number" name="cxcodigo" required><br><br>

        Selecione o produto:<br>
        <select name="cxproduto" required>
            <option value="">Selecione um produto</option>
            <option value="1">Pizza de Queijo</option>
            <option value="2">Pizza de Calabresa</option>
            <option value="3">Pizza de Frango</option>
            <option value="4">Coca-Cola</option>
        </select><br><br>

        Digite a quantidade:<br>
        <input type="number" name="cxqtd" min="1" value="1" required><br><br>

        <input type="submit" value="Fazer Pedido">

    </form>
</body>
</html>