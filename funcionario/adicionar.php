<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include "../menu.php"; ?>
    <div class="container mt-4">
        <h1>Adicionar Funcionario</h1>
        <form action="inserir.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="cargo" class="form-label">Cargo:</label>
                <input type="text" class="form-control" id="cargo" name="cargo" required>
            </div>

            <div class="mb-3">
                <label for="salario" class="form-label">Salario:</label>
                <input type="number" step="0.01" class="form-control" id="salario" name="salario" required>
            </div>

            <div class="mb-3">
                <label for="data_admissao" class="form-label">Admissao:</label>
                <input type="date" class="form-control" id="data_admissao" name="data_admissao" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>
    </div>
</body>
</html>