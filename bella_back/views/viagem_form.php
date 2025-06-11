<<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($viagemInfo) ? 'Editar Viagem' : 'Cadastro de Viagem'; ?></title>
    <link rel="stylesheet" href="/bella_back/public/style_form.css">
</head>
<body>
    <h1><?php echo isset($viagemInfo) ? 'Editar Viagem' : 'Cadastro de Viagem'; ?></h1>
    <form action="<?php echo isset($viagemInfo) ? '/bella_back/update-viagem' : '/bella_back/save-viagem'; ?>" method="POST">
        <?php if (isset($viagemInfo)): ?>
            <input type="hidden" name="id_viagem" value="<?php echo htmlspecialchars($viagemInfo['id_viagem']); ?>">
        <?php endif; ?>

        <label>Destino:</label>
        <input type="text" name="destino" required value="<?php echo isset($viagemInfo) ? htmlspecialchars($viagemInfo['destino']) : ''; ?>"><br><br>

        <label>Data de Início:</label>
        <input type="date" name="data_inicio" required value="<?php echo isset($viagemInfo) ? htmlspecialchars($viagemInfo['data_inicio']) : ''; ?>"><br><br>

        <label>Data de Fim:</label>
        <input type="date" name="data_fim" required value="<?php echo isset($viagemInfo) ? htmlspecialchars($viagemInfo['data_fim']) : ''; ?>"><br><br>

        <label>Descrição:</label>
        <input type="text" name="descricao" required value="<?php echo isset($viagemInfo) ? htmlspecialchars($viagemInfo['descricao']) : ''; ?>"><br><br>

        <input type="submit" value="<?php echo isset($viagemInfo) ? 'Atualizar' : 'Cadastrar'; ?>">
    </form>

    <a href="/bella_back/list-viagem">Ver todas as viagens</a> <br> <br>
</body>
</html>