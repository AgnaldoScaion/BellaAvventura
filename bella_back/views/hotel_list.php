<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Hotéis</title>
</head>
<body>
    <h1>Hotéis Cadastrados</h1>

    <?php if (empty($hoteis)): ?>
        <p>Nenhum hotel cadastrado.</p>
    <?php else: ?>
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
                    <th>Sobre</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hoteis as $hotel): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($hotel['id_hotel']); ?></td>
                        <td><?php echo htmlspecialchars($hotel['nome']); ?></td>
                        <td><?php echo htmlspecialchars($hotel['telefone']); ?></td>
                        <td><?php echo htmlspecialchars($hotel['estado']); ?></td>
                        <td><?php echo htmlspecialchars($hotel['cidade']); ?></td>
                        <td><?php echo htmlspecialchars($hotel['rua']); ?></td>
                        <td><?php echo htmlspecialchars($hotel['bairro']); ?></td>
                        <td><?php echo htmlspecialchars($hotel['numero']); ?></td>
                        <td><?php echo htmlspecialchars($hotel['sobre']); ?></td>
                        <td>
                            <a href="/bella_back/update-hotel/<?php echo $hotel['id_hotel']; ?>">Atualizar</a>
                            <form action="/bella_back/delete-hotel" method="POST" style="display:inline;">
                                <input type="hidden" name="id_hotel" value="<?php echo $hotel['id_hotel']; ?>">
                                <button type="submit">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="/bella_back/save-hotel">Cadastrar novo hotel</a>
</body>
</html>