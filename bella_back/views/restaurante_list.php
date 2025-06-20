<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Restaurantes</title>
    <link rel="stylesheet" href="/bella_back/public/style_list.css">
</head>
<body>
    <h1>Restaurantes Cadastrados</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Número</th>
                <th>Horário de Funcionamento</th>
                <th>Sobre</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($restaurantes)): ?>
                <?php foreach ($restaurantes as $restaurante): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($restaurante['id_restaurante'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($restaurante['nome'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($restaurante['telefone'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($restaurante['estado'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($restaurante['cidade'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($restaurante['rua'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($restaurante['bairro'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($restaurante['numero'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($restaurante['horario_funcionamento'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($restaurante['sobre'] ?? ''); ?></td>
                        <td>
                            <a href="/bella_back/update-restaurante/<?php echo $restaurante['id_restaurante']; ?>">Atualizar</a>
                            <form action="/bella_back/delete-restaurante" method="POST" style="display:inline;">
                                <input type="hidden" name="id_restaurante" value="<?php echo $restaurante['id_restaurante']; ?>">
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este restaurante?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
            <?php endif; ?>
        </tbody>
    </table>
    <br>
    <a href="/bella_back/save-restaurante" class="cadastrar-link" >Cadastrar novo restaurante</a>
</body>
</html>