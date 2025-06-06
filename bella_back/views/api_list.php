<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de APIs</title>
</head>
<body>
    <h1>APIs Cadastradas</h1>

    <?php if (empty($apis)): ?>
        <p>Nenhuma API cadastrada.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>URL</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($apis as $api): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($api['id_api']); ?></td>
                        <td><?php echo htmlspecialchars($api['nome']); ?></td>
                        <td><?php echo htmlspecialchars($api['url']); ?></td>
                        <td><?php echo htmlspecialchars($api['descricao']); ?></td>
                        <td>
                            <a href="/bella_back/update-api/<?php echo $api['id_api']; ?>">Atualizar</a>
                            <form action="/bella_back/delete-api" method="POST" style="display:inline;">
                                <input type="hidden" name="id_api" value="<?php echo $api['id_api']; ?>">
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="/bella_back/api_form.php">Cadastrar nova API</a>
</body>
</html>