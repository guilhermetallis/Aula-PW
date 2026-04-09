<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "pizzaria_db";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
?>