<!-- filepath: c:\xampp\htdocs\bella_back\views\usuario_form.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($usuarioInfo) ? 'Editar Usuário' : 'Cadastro de Usuário'; ?></title>
</head>
<body>
    <h1><?php echo isset($usuarioInfo) ? 'Editar Usuário' : 'Cadastro de Usuário'; ?></h1>
    <form action="<?php echo isset($usuarioInfo) ? '/bella_back/update-usuario' : '/bella_back/save-usuario'; ?>" method="POST">
        <?php if (isset($usuarioInfo)): ?>
            <input type="hidden" name="id_usuario" value="<?php echo htmlspecialchars($usuarioInfo['id_usuario']); ?>">
        <?php endif; ?>

        <label>Nome Completo:</label>
        <input type="text" name="nome_completo" required value="<?php echo isset($usuarioInfo) ? htmlspecialchars($usuarioInfo['nome_completo']) : ''; ?>"><br><br>

        <label>Data de Nascimento:</label>
        <input type="date" name="data_nascimento" required value="<?php echo isset($usuarioInfo) ? htmlspecialchars($usuarioInfo['data_nascimento']) : ''; ?>"><br><br>

        <label>CPF:</label>
        <input type="text" name="CPF" required value="<?php echo isset($usuarioInfo) ? htmlspecialchars($usuarioInfo['CPF']) : ''; ?>"><br><br>

        <label>E-mail:</label>
        <input type="email" name="e_mail" required value="<?php echo isset($usuarioInfo) ? htmlspecialchars($usuarioInfo['e_mail']) : ''; ?>"><br><br>

        <label>Senha:</label>
        <input type="password" name="senha"><br><br>
        <?php if (isset($usuarioInfo)): ?>
            <small>Preencha apenas se desejar alterar a senha.</small><br><br>
        <?php endif; ?>

        <label>Perfil:</label>
        <input type="text" name="nome_perfil" required value="<?php echo isset($usuarioInfo) ? htmlspecialchars($usuarioInfo['nome_perfil']) : ''; ?>"><br><br>

        <input type="submit" value="<?php echo isset($usuarioInfo) ? 'Atualizar' : 'Cadastrar'; ?>">
    </form>

    <a href="/bella_back/list-usuario">Ver todos os usuários</a>
</body>
</html>