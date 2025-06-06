<!-- filepath: c:\xampp\htdocs\bella_back\views\usuario_list.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Usuários</h1>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nome Completo</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Perfil</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo htmlspecialchars($usuario['id_usuario']); ?></td>
            <td><?php echo htmlspecialchars($usuario['nome_completo']); ?></td>
            <td><?php echo htmlspecialchars($usuario['data_nascimento']); ?></td>
            <td><?php echo htmlspecialchars($usuario['CPF']); ?></td>
            <td><?php echo htmlspecialchars($usuario['e_mail']); ?></td>
            <td><?php echo htmlspecialchars($usuario['nome_perfil']); ?></td>
            <td>
                <a href="/bella_back/update-usuario/<?php echo $usuario['id_usuario']; ?>">Editar</a>
                <form action="/bella_back/delete-usuario" method="POST" style="display:inline;">
                    <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>">
                    <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
        <a href="/bella_back/save-usuario">Cadastrar novo usuário</a>
</body>
</html>