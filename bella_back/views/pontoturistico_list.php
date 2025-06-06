<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontos Turísticos Cadastrados</title>
</head>
<body>

<h1>Pontos Turísticos Cadastrados</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobre</th>
        <th>Número</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($pontos_turisticos as $ponto_turistico): ?>
    <tr>
        <td><?php echo htmlspecialchars($ponto_turistico['id_pontoturistico']); ?></td>
        <td><?php echo htmlspecialchars($ponto_turistico['nome']); ?></td>
        <td><?php echo htmlspecialchars($ponto_turistico['sobre']); ?></td>
        <td><?php echo htmlspecialchars($ponto_turistico['numero']); ?></td>
        <td><?php echo htmlspecialchars($ponto_turistico['rua']); ?></td>
        <td><?php echo htmlspecialchars($ponto_turistico['bairro']); ?></td>
        <td><?php echo htmlspecialchars($ponto_turistico['cidade']); ?></td>
        <td><?php echo htmlspecialchars($ponto_turistico['estado']); ?></td>
        <td>
            <a href="/bella_back/update-pontoturistico/<?php echo $ponto_turistico['id_pontoturistico']; ?>">Atualizar</a>
            <form action="/bella_back/delete-pontoturistico" method="POST" style="display:inline;">
                <input type="hidden" name="id_pontoturistico" value="<?php echo $ponto_turistico['id_pontoturistico']; ?>">
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="/bella_back/pontoturistico_form.php">Cadastrar novo ponto turístico</a>

</body>
</html>