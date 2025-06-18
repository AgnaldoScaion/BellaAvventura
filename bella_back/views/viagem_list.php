<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viagens Cadastradas</title>
    <link rel="stylesheet" href="/bella_back/public/style_list.css">
</head>
<body>

<h1>Viagens Cadastradas</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Destino</th>
        <th>Data de início</th>
        <th>Data de fim</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($viagens as $viagem): ?>
    <tr>
        <td><?php echo htmlspecialchars($viagem['id_viagem']); ?></td>
        <td><?php echo htmlspecialchars($viagem['destino']); ?></td>
        <td><?php echo htmlspecialchars($viagem['data_inicio']); ?></td>
        <td><?php echo htmlspecialchars($viagem['data_fim']); ?></td>
        <td><?php echo htmlspecialchars($viagem['descricao']); ?></td>
        <td>
            <a href="/bella_back/update-viagem/<?php echo $viagem['id_viagem']; ?>">Atualizar</a>
            <form action="/bella_back/delete-viagem" method="POST" style="display:inline;">
            <input type="hidden" name="id_viagem" value="<?php echo htmlspecialchars($viagem['id_viagem']); ?>">
            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir esta viagem agendada?')">Excluir</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="/bella_back/save-viagem" class="cadastrar-link" >Cadastrar nova viagem</a>

</body>
</html>