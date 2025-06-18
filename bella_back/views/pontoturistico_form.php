<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($pontoturisticoInfo) ? 'Editar Ponto Turístico' : 'Cadastro de Ponto Turístico'; ?></title>
    <link rel="stylesheet" href="/bella_back/public/style_form.css">
</head>
<body>
    <h1><?php echo isset($pontoturisticoInfo) ? 'Editar Ponto Turístico' : 'Cadastro de Ponto Turístico'; ?></h1>
    <form action="<?php echo isset($pontoturisticoInfo) ? '/bella_back/update-pontoturistico' : '/bella_back/save-pontoturistico'; ?>" method="POST">
        <?php if (isset($pontoturisticoInfo)): ?>
            <input type="hidden" name="id_pontoturistico" value="<?php echo htmlspecialchars($pontoturisticoInfo['id_pontoturistico']); ?>">
        <?php endif; ?>

        <label>Nome:</label>
        <input type="text" name="nome" required value="<?php echo isset($pontoturisticoInfo) ? htmlspecialchars($pontoturisticoInfo['nome']) : ''; ?>"><br><br>

        <label>Sobre:</label>
        <input type="text" name="sobre" required value="<?php echo isset($pontoturisticoInfo) ? htmlspecialchars($pontoturisticoInfo['sobre']) : ''; ?>"><br><br>

        <label>Número:</label>
        <input type="number" name="numero" required value="<?php echo isset($pontoturisticoInfo) ? htmlspecialchars($pontoturisticoInfo['numero']) : ''; ?>"><br><br>

        <label>Rua:</label>
        <input type="text" name="rua" required value="<?php echo isset($pontoturisticoInfo) ? htmlspecialchars($pontoturisticoInfo['rua']) : ''; ?>"><br><br>

        <label>Bairro:</label>
        <input type="text" name="bairro" required value="<?php echo isset($pontoturisticoInfo) ? htmlspecialchars($pontoturisticoInfo['bairro']) : ''; ?>"><br><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" required value="<?php echo isset($pontoturisticoInfo) ? htmlspecialchars($pontoturisticoInfo['cidade']) : ''; ?>"><br><br>

        <label>Estado:</label>
        <input type="text" name="estado" required value="<?php echo isset($pontoturisticoInfo) ? htmlspecialchars($pontoturisticoInfo['estado']) : ''; ?>"><br><br>

        <input type="submit" value="<?php echo isset($pontoturisticoInfo) ? 'Atualizar' : 'Cadastrar'; ?>">
    </form>

    <a href="/bella_back/list-pontoturistico">Ver todos os pontos turísticos</a> <br> <br>
</body>
</html>