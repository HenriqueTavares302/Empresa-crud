<?php
require "../conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$data_admissao = $_POST['data_admissao'];

$sql = "update funcionario set nome = '$nome', email = '$email', cargo = '$cargo', salario = '$salario', data_admissao = '$data_admissao' where id = $id";

$resultado = mysqli_query($conexao, $sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizacao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "../menu.php"; ?>
    <div class="container mt-4">
        <?php
        if ($resultado) {
            echo "<div class='alert alert-success'>Funcionario atualizado com sucesso.</div>";
        } else {
            echo "<div class='alert alert-danger'>Erro ao atualizar o funcionario.</div>";
        }
        ?>
        <a href="listar.php" class="btn btn-primary">Voltar para a lista</a>
    </div>
</body>
</html>