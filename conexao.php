<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "empresa";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");
?>