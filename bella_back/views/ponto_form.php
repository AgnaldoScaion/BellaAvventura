<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($pontoInfo) ? 'Editar Ponto' : 'Cadastro de Ponto'; ?></title>
    <link rel="stylesheet" href="/bella_back/public/style_form.css">
</head>
<body>
    <h1><?php echo isset($pontoInfo) ? 'Editar Ponto' : 'Cadastro de Ponto'; ?></h1>
    <form action="<?php echo isset($pontoInfo) ? '/bella_back/update-ponto' : '/bella_back/save-ponto'; ?>" method="POST">
        <?php if (isset($pontoInfo)): ?>
            <input type="hidden" name="id_ponto" value="<?php echo htmlspecialchars($pontoInfo['id_ponto']); ?>">
        <?php endif; ?>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" required value="<?php echo isset($pontoInfo) ? htmlspecialchars($pontoInfo['quantidade']) : ''; ?>"><br><br>

        <input type="submit" value="<?php echo isset($pontoInfo) ? 'Atualizar' : 'Cadastrar'; ?>">
    </form>

    <a href="/bella_back/list-ponto">Ver todos os pontos</a> <br> <br>
</body>
</html>