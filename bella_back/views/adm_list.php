<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Administradores</title>
    <link rel="stylesheet" href="/bella_back/public/style_list.css">
</head>
<body>
    <h1>Administradores</h1>
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
        <?php if (!empty($adms)): ?>
            <?php foreach ($adms as $adm): ?>
            <tr>
                <td><?php echo htmlspecialchars($adm['id_adm']); ?></td>
                <td><?php echo htmlspecialchars($adm['nome_completo']); ?></td>
                <td><?php echo htmlspecialchars($adm['data_nascimento']); ?></td>
                <td><?php echo htmlspecialchars($adm['CPF']); ?></td>
                <td><?php echo htmlspecialchars($adm['e_mail']); ?></td>
                <td><?php echo htmlspecialchars($adm['nome_perfil']); ?></td>
                <td>
                    <a href="/bella_back/update-adm/<?php echo urlencode($adm['id_adm']); ?>">Editar</a>
                    <form action="/bella_back/delete-adm" method="POST" style="display:inline;">
                        <input type="hidden" name="id_adm" value="<?php echo htmlspecialchars($adm['id_adm']); ?>">
                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este administrador?')">Excluir</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Nenhum administrador cadastrado.</td>
            </tr>
        <?php endif; ?>
    </table>
    <br>
    <a href="/bella_back/save-adm" class="cadastrar-link">Cadastrar novo administrador</a>
</body>
</html>