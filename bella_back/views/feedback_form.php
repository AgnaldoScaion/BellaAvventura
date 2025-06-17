<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($feedbackInfo) ? 'Editar Feedback' : 'Cadastro de Feedback'; ?></title>
    <link rel="stylesheet" href="/bella_back/public/style_form.css">
</head>
<body>
    <h1><?php echo isset($feedbackInfo) ? 'Editar Feedback' : 'Cadastro de Feedback'; ?></h1>
    <form action="<?php echo isset($feedbackInfo) ? '/bella_back/update-feedback' : '/bella_back/save-feedback'; ?>" method="POST">
        <?php if (isset($feedbackInfo)): ?>
            <input type="hidden" name="id_feedback" value="<?php echo htmlspecialchars($feedbackInfo['id_feedback']); ?>">
        <?php endif; ?>

        <label>Feedback:</label>
        <input type="text" name="feedback" required value="<?php echo isset($feedbackInfo) ? htmlspecialchars($feedbackInfo['feedback']) : ''; ?>"><br><br>

        <label>Estrelas:</label>
        <input type="number" name="estrelas" min="1" max="5" required value="<?php echo isset($feedbackInfo) ? htmlspecialchars($feedbackInfo['estrelas']) : ''; ?>"><br><br>

        <label>Quantidade de feedbacks:</label>
        <input type="number" name="quantidade_feedbacks" min="1" required value="<?php echo isset($feedbackInfo) ? htmlspecialchars($feedbackInfo['quantidade_feedbacks']) : ''; ?>"><br><br>

        <input type="submit" value="<?php echo isset($feedbackInfo) ? 'Atualizar' : 'Adicionar feedback'; ?>">
    </form>

    <a href="/bella_back/list-feedback">Ver todos os feedbacks</a> <br> <br>
</body>
</html>