<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($restauranteInfo) ? 'Editar Restaurante' : 'Cadastro de Restaurante'; ?></title>
    <link rel="stylesheet" href="/bella_back/public/style_form.css">
</head>
<body>
    <h1><?php echo isset($restauranteInfo) ? 'Editar Restaurante' : 'Cadastro de Restaurante'; ?></h1>
    <form action="<?php echo isset($restauranteInfo) ? '/bella_back/update-restaurante' : '/bella_back/save-restaurante'; ?>" method="POST">
        <?php if (isset($restauranteInfo)): ?>
            <input type="hidden" name="id_restaurante" value="<?php echo htmlspecialchars($restauranteInfo['id_restaurante']); ?>">
        <?php endif; ?>

        <label>Nome:</label>
        <input type="text" name="nome" required value="<?php echo isset($restauranteInfo) ? htmlspecialchars($restauranteInfo['nome']) : ''; ?>"><br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" required value="<?php echo isset($restauranteInfo) ? htmlspecialchars($restauranteInfo['telefone']) : ''; ?>"><br><br>

        <label>Estado:</label>
        <input type="text" name="estado" required value="<?php echo isset($restauranteInfo) ? htmlspecialchars($restauranteInfo['estado']) : ''; ?>"><br><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" required value="<?php echo isset($restauranteInfo) ? htmlspecialchars($restauranteInfo['cidade']) : ''; ?>"><br><br>

        <label>Rua:</label>
        <input type="text" name="rua" required value="<?php echo isset($restauranteInfo) ? htmlspecialchars($restauranteInfo['rua']) : ''; ?>"><br><br>

        <label>Bairro:</label>
        <input type="text" name="bairro" required value="<?php echo isset($restauranteInfo) ? htmlspecialchars($restauranteInfo['bairro']) : ''; ?>"><br><br>

        <label>Número:</label>
        <input type="number" name="numero" required value="<?php echo isset($restauranteInfo) ? htmlspecialchars($restauranteInfo['numero']) : ''; ?>"><br><br>

        <label>Horário de Funcionamento:</label>
        <input type="text" name="horario_funcionamento" required value="<?php echo isset($restauranteInfo) ? htmlspecialchars($restauranteInfo['horario_funcionamento']) : ''; ?>"><br><br>

        <label>Sobre:</label>
        <input type="text" name="sobre" required value="<?php echo isset($restauranteInfo) ? htmlspecialchars($restauranteInfo['sobre']) : ''; ?>"><br><br>

        <input type="submit" value="<?php echo isset($restauranteInfo) ? 'Atualizar' : 'Cadastrar'; ?>">
    </form>

    <a href="/bella_back/list-restaurante">Ver todos os restaurantes</a> <br> <br>
</body>
</html>