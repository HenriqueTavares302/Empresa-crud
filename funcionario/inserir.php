<?php
require "../conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$data_admissao = $_POST['data_admissao'];

$sql = "insert into funcionario (nome, email, cargo, salario, data_admissao)
        values ('$nome', '$email', '$cargo', '$salario', '$data_admissao')";

$resultado = mysqli_query($conexao, $sql);

$base = "../";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <?php include "../menu.php"; ?>
    <div class="conteudo">
        <?php if ($resultado) { ?>
            <div class="aviso sucesso">Funcionário cadastrado com sucesso.</div>
        <?php } else { ?>
            <div class="aviso erro">Erro ao cadastrar: <?= mysqli_error($conexao) ?></div>
        <?php } ?>
        <a href="listar.php">Ver lista de funcionários</a>
    </div>
</body>
</html>