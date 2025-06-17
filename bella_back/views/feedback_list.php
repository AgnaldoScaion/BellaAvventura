<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Feedbacks</title>
    <link rel="stylesheet" href="/bella_back/public/style_list.css">
</head>
<body>
    <h1>Feedbacks Cadastrados</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Feedback</th>
                <th>Estrelas</th>
                <th>Quantidade de Feedbacks</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($feedbacks)): ?>
            <?php else: ?>
                <?php foreach ($feedbacks as $feedback): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($feedback['id_feedback']); ?></td>
                        <td><?php echo htmlspecialchars($feedback['feedback']); ?></td>
                        <td><?php echo htmlspecialchars($feedback['estrelas']); ?></td>
                        <td><?php echo htmlspecialchars($feedback['quantidade_feedbacks']); ?></td>
                        <td>
                            <a href="/bella_back/update-feedback/<?php echo $feedback['id_feedback']; ?>">Atualizar</a>
                            <form action="/bella_back/delete-feedback" method="POST" style="display:inline;">
                                <input type="hidden" name="id_feedback" value="<?php echo htmlspecialchars($feedback['id_feedback']); ?>">
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este feedback?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="/bella_back/save-feedback" class="cadastrar-link" >Adicionar novo feedback</a>
</body>
</html>