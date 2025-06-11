<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Hotéis</title>
    <link rel="stylesheet" href="/bella_back/public/style_list.css">
</head>
<body>
    <h1>Hotéis Cadastrados</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Hotel</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Rua</th>
                <th>Bairro</th>
                <th>Número</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($hoteis)): ?>
            <?php else: ?>
                <?php foreach ($hoteis as $hotel): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($hotel['id_hotel'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($hotel['nome_hotel'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($hotel['estado'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($hotel['cidade'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($hotel['rua'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($hotel['bairro'] ?? ''); ?></td>
                        <td><?php echo htmlspecialchars($hotel['numero'] ?? ''); ?></td>
                        <td>
                            <a href="/bella_back/update-hotel/<?php echo $hotel['id_hotel']; ?>">Atualizar</a>
                            <form action="/bella_back/delete-hotel" method="POST" style="display:inline;">
                                <input type="hidden" name="id_hotel" value="<?php echo $hotel['id_hotel']; ?>">
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este hotel?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="/bella_back/save-hotel-form" class="cadastrar-link" >Cadastrar novo hotel</a>
</body>
</html>