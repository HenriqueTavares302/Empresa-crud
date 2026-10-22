<?php
require "../conexao.php";

$sql = "select * from funcionario order by id";
$resultado = mysqli_query($conexao, $sql);

$base = "../";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <?php include "../menu.php"; ?>
    <div class="conteudo">
        <h1>Funcionários</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Cargo</th>
                <th>Salário</th>
                <th>Admissão</th>
                <th>Ações</th>
            </tr>
            <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <td><?= $linha['id'] ?></td>
                    <td><?= $linha['nome'] ?></td>
                    <td><?= $linha['email'] ?></td>
                    <td><?= $linha['cargo'] ?></td>
                    <td>R$ <?= number_format($linha['salario'], 2, ',', '.') ?></td>
                    <td><?= date('d/m/Y', strtotime($linha['data_admissao'])) ?></td>
                    <td>
                        <a href="editar.php?id=<?= $linha['id'] ?>">Editar</a>
                        <a href="remover.php?id=<?= $linha['id'] ?>">Remover</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>