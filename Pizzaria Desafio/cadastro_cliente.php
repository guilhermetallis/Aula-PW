<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>

    <form action="salvar_cliente.php" method="POST">

    <label>Nome: </label><br>
    <input type="text" name="nome" required>
    <br><br>

    <label>Telefone: </label><br>
    <input type="text" name="telefone">
     <br><br>

     <input type="submit" value="Cadastrar">

    </form>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>