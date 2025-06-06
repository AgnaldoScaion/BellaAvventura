<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de API</title>
</head>
<body>
    <h1>Cadastro de API</h1>
    <form action="/bella_back/save-api" method="POST">
        <label>Nome da API:</label>
        <input type="text" name="nome" required><br><br>

        <label>URL:</label>
        <input type="text" name="url" required><br><br>

        <label>Descrição:</label>
        <input type="text" name="descricao" required><br><br>

        <input type="submit" value="Cadastrar API">
    </form>

    <a href="/bella_back/list-api">Ver todas as APIs</a>
</body>
</html>