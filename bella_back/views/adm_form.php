<!-- filepath: c:\xampp\htdocs\bella_back\views\adm_form.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($admInfo) ? 'Editar Administrador' : 'Cadastro de Administrador'; ?></title>
    <link rel="stylesheet" href="/bella_back/public/css/style.css">


</head>
<body>
    <h1><?php echo isset($admInfo) ? 'Editar Administrador' : 'Cadastro de Administrador'; ?></h1>
    <form action="<?php echo isset($admInfo) ? '/bella_back/update-adm' : '/bella_back/save-adm'; ?>" method="POST">
        <?php if (isset($admInfo)): ?>
            <input type="hidden" name="id_adm" value="<?php echo htmlspecialchars($admInfo['id_adm']); ?>">
        <?php endif; ?>

        <label>Nome Completo:</label>
        <input type="text" name="nome_completo" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['nome_completo']) : ''; ?>"><br><br>

        <label>Data de Nascimento:</label>
        <input type="date" name="data_nascimento" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['data_nascimento']) : ''; ?>"><br><br>

        <label>CPF:</label>
        <input type="text" name="CPF" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['CPF']) : ''; ?>"><br><br>

        <label>E-mail:</label>
        <input type="email" name="e_mail" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['e_mail']) : ''; ?>"><br><br>

        <label>Senha:</label>
        <input type="password" name="senha_adm"><br><br>
        <?php if (isset($admInfo)): ?>
            <small>Preencha apenas se desejar alterar a senha.</small><br><br>
        <?php endif; ?>

        <label>Perfil:</label>
        <input type="text" name="nome_perfil" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['nome_perfil']) : ''; ?>"><br><br>

        <input type="submit" value="<?php echo isset($admInfo) ? 'Atualizar' : 'Cadastrar'; ?>">
    </form>

    <a href="/bella_back/list-adm">Ver todos os administradores</a>
</body>
</html>