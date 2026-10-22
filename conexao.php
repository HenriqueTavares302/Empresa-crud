<?php
$servidor = "localhost:3307";
$usuario = "root";
$senha = "";
$bd = "empresa";

$conexao = mysqli_connect($servidor, $usuario, $senha, $bd);

if (!$conexao) {
    echo "Erro na conexao";
}
?>