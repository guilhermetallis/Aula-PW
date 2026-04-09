<?php
include 'conexao.php';

//recebe os dados do formulario
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

//SQL
$sql = "INSERT INTO clientes (nome) values ('$nome')";

if ($conexao->query($sql) === TRUE) {
    echo "cliente cadastro com sucesso";
} else {
    echo "Erro: " . $conexao->error;
}
?>

<br><br>
<a href="cadastro_cliente.php">Cadastro outro</a><br>
<a href="index.php">Voltar</a>