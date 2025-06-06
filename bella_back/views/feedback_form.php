<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Feedback</title>
</head>
<body>
    <h1>Cadastro de Feedback</h1>
    <form action="/bella_back/save-feedback" method="POST">
        <label>Feedback:</label>
        <input type="text" name="feedback" required><br><br>

        <label>Estrelas:</label>
        <input type="number" name="estrelas" required><br><br>

        <label>Quantidade de feedbacks:</label>
        <input type="number" name="quantidade_feedbacks" required><br><br>

        <input type="submit" value="Cadastrar feedback">
    </form>

    <a href="/bella_back/list-feedback">Ver todos os feedbacks</a>
</body>
</html>