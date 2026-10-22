<?php
require "../conexao.php";

$id = $_GET['id'];

$sql = "select * from funcionario where id = $id";
$resultado = mysqli_query($conexao, $sql);
$funcionario = mysqli_fetch_assoc($resultado);

$base = "../";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <?php include "../menu.php"; ?>
    <div class="conteudo">
        <h1>Editar Funcionário</h1>
        <form action="atualizar.php" method="post">
            <input type="hidden" name="id" value="<?= $funcionario['id'] ?>">

            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?= $funcionario['nome'] ?>" required>
            </div>

            <div class="campo">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="<?= $funcionario['email'] ?>">
            </div>

            <div class="campo">
                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" value="<?= $funcionario['cargo'] ?>" required>
            </div>

            <div class="campo">
                <label for="salario">Salário:</label>
                <input type="number" step="0.01" id="salario" name="salario" value="<?= $funcionario['salario'] ?>" required>
            </div>

            <div class="campo">
                <label for="data_admissao">Admissão:</label>
                <input type="date" id="data_admissao" name="data_admissao" value="<?= $funcionario['data_admissao'] ?>" required>
            </div>

            <div class="botoes">
                <button type="submit">Atualizar</button>
            </div>
        </form>
    </div>
</body>
</html>