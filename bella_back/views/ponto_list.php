<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontos Cadastrados</title>
</head>
<body>

<h1>Pontos Cadastrados</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Quantidade</th>
    </tr>
    <?php foreach ($pontos as $ponto): ?>
    <tr>
        <td><?php echo $ponto['id_ponto']; ?></td>
        <td><?php echo htmlspecialchars($ponto['quantidade']); ?></td>
        <td>
            <a href="/bella_back/update-ponto/<?php echo $ponto['id_ponto']; ?>">Atualizar</a>
            <form action="/bella_back/delete-ponto" method="POST" style="display:inline;">
                <input type="hidden" name="id_ponto" value="<?php echo $ponto['id_ponto']; ?>">
                <button type="submit">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="/bella_back/ponto_form.php">Cadastrar nova pontuação</a>

</body>
</html>