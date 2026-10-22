<?php
require "../conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$data_admissao = $_POST['data_admissao'];

$sql = "update funcionario set
        nome = '$nome',
        email = '$email',
        cargo = '$cargo',
        salario = '$salario',
        data_admissao = '$data_admissao'
        where id = $id";

$resultado = mysqli_query($conexao, $sql);

$base = "../";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <?php include "../menu.php"; ?>
    <div class="conteudo">
        <?php if ($resultado) { ?>
            <div class="aviso sucesso">Funcionário atualizado com sucesso.</div>
        <?php } else { ?>
            <div class="aviso erro">Erro ao atualizar: <?= mysqli_error($conexao) ?></div>
        <?php } ?>
        <a href="listar.php">Voltar para a lista</a>
    </div>
</body>
</html>