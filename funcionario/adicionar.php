<?php
$base = "../";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionário</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <?php include "../menu.php"; ?>
    <div class="conteudo">
        <h1>Adicionar Funcionário</h1>
        <form action="inserir.php" method="post">
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="campo">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="campo">
                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" required>
            </div>

            <div class="campo">
                <label for="salario">Salário:</label>
                <input type="number" step="0.01" id="salario" name="salario" required>
            </div>

            <div class="campo">
                <label for="data_admissao">Admissão:</label>
                <input type="date" id="data_admissao" name="data_admissao" required>
            </div>

            <div class="botoes">
                <button type="submit">Cadastrar</button>
                <button type="reset" class="limpar">Limpar</button>
            </div>
        </form>
    </div>
</body>
</html>