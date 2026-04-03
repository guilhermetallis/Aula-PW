<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <h1>Vendas</h1>
    <form action="comanda.php" method="post">
        digite o codigo do clinte:<br/>
        <input type="number" name="cxcodigo"><br/><br/>

        <select name="cxproduto">
            <option value="">Selecione um produto</option>
            <option value="1">Pizza Margherita</option>
            <option value="2">Pizza Pepperoni</option>
            <option value="3">Pizza Vegetariana</option>
        </select>
        <input type="submit" value="pedido">
    </form>
</body>
</html>