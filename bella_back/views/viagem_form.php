<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Viagem</title>
</head>
<body>
    <h1>Cadastro de Viagem</h1>
    <form action="/bella_back/viagem_store.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>
        
        <label>Destino:</label>
        <input type="text" name="destino" required><br><br>
        
        <label>Data de Início:</label>
        <input type="date" name="data_inicio" required><br><br>
        
        <label>Data de Fim:</label>
        <input type="date" name="data_fim" required><br><br>
        
        <label>Descrição:</label>
        <input type="text" name="descricao" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>

    <a href="/bella_back/list-viagem">Ver todas as viagens</a>
</body>
</html>