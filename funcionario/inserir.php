<?php
require "../conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$data_admissao = $_POST['data_admissao'];

$sql = "insert into funcionario (nome, email, cargo, salario, data_admissao) values ('$nome', '$email', '$cargo', '$salario', '$data_admissao')";

$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "../menu.php"; ?>
    <div class="container mt-4">
        <?php
        if ($resultado) {
            echo "<div class='alert alert-success'>Funcionario cadastrado com sucesso.</div>";
        } else {
            echo "<div class='alert alert-danger'>Erro ao cadastrar o funcionario.</div>";
        }
        ?>
        <a href="listar.php" class="btn btn-primary">Ver lista de funcionarios</a>
    </div>
</body>
</html>