<!-- filepath: c:\xampp\htdocs\bella_back\views\hotel_form.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($hotelInfo) ? 'Editar Hotel' : 'Cadastro de Hotel'; ?></title>
</head>
<body>
    <h1><?php echo isset($hotelInfo) ? 'Editar Hotel' : 'Cadastro de Hotel'; ?></h1>
    <form action="<?php echo isset($hotelInfo) ? '/bella_back/update-hotel' : '/bella_back/save-hotel'; ?>" method="POST">
        <?php if (isset($hotelInfo)): ?>
            <input type="hidden" name="id_hotel" value="<?php echo htmlspecialchars($hotelInfo['id_hotel']); ?>">
        <?php endif; ?>

        <label>Nome do Hotel:</label>
        <input type="text" name="nome_hotel" required value="<?php echo isset($hotelInfo) ? htmlspecialchars($hotelInfo['nome_hotel']) : ''; ?>"><br><br>

        <label>Estado:</label>
        <input type="text" name="estado" required value="<?php echo isset($hotelInfo) ? htmlspecialchars($hotelInfo['estado']) : ''; ?>"><br><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" required value="<?php echo isset($hotelInfo) ? htmlspecialchars($hotelInfo['cidade']) : ''; ?>"><br><br>

        <label>Bairro:</label>
        <input type="text" name="bairro" required value="<?php echo isset($hotelInfo) ? htmlspecialchars($hotelInfo['bairro']) : ''; ?>"><br><br>

        <label>Rua:</label>
        <input type="text" name="rua" required value="<?php echo isset($hotelInfo) ? htmlspecialchars($hotelInfo['rua']) : ''; ?>"><br><br>

        <label>Número:</label>
        <input type="number" name="numero" required value="<?php echo isset($hotelInfo) ? htmlspecialchars($hotelInfo['numero']) : ''; ?>"><br><br>

        <input type="submit" value="<?php echo isset($hotelInfo) ? 'Atualizar' : 'Cadastrar'; ?>">
    </form>

    <a href="/bella_back/list-hotel">Ver todos os hotéis</a>
</body>
</html>