<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Ponto Turístico</title>
</head>
<body>
    <h1>Cadastro de Ponto Turístico</h1>
    <form action="/bella_back/save-pontoturistico" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Sobre:</label>
        <input type="text" name="sobre" required><br><br>

        <label>Número:</label>
        <input type="number" name="numero" required><br><br>

        <label>Rua:</label>
        <input type="text" name="rua" required><br><br>

        <label>Bairro:</label>
        <input type="text" name="bairro"><br><br>

        <label>Cidade:</label>
        <input type="text" name="cidade" required><br><br>

        <label>Estado:</label>
        <input type="text" name="estado" required><br><br>

        <input type="submit" value="Cadastrar ponto turístico">
    </form>

    <a href="/bella_back/list-pontoturistico">Ver todos os pontos turísticos</a>
</body>
</html>