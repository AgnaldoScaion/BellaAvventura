<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Pontos</title>
</head>
<body>
    <h1>Cadastro de Pontos</h1>
    <form action="/bella_back/save-ponto" method="POST">
        <label>Quantidade:</label>
        <input type="number" name="quantidade" required><br><br>

        <input type="submit" value="Cadastrar ponto">
    </form>

    <a href="/bella_back/list-ponto">Ver todos os pontos</a>
</body>
</html>