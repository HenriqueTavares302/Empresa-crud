<?php
require "../conexao.php";

$id = $_GET['id'];

$sql = "delete from funcionario where id = $id";
$resultado = mysqli_query($conexao, $sql);

$base = "../";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <?php include "../menu.php"; ?>
    <div class="conteudo">
        <?php if ($resultado) { ?>
            <div class="aviso sucesso">Funcionário removido com sucesso.</div>
        <?php } else { ?>
            <div class="aviso erro">Erro ao remover: <?= mysqli_error($conexao) ?></div>
        <?php } ?>
        <a href="listar.php">Voltar para a lista</a>
    </div>
</body>
</html>