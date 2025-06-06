<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Restaurante</title>
</head>
<body>
    <h1>Cadastro de Restaurante</h1>
    <form action="/bella_back/restaurante_store.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>
        
        <label>Telefone:</label>
        <input type="text" name="telefone" required><br><br>
        
        <label>Estado:</label>
        <input type="text" name="estado" required><br><br>
        
        <label>Cidade:</label>
        <input type="text" name="cidade" required><br><br>
        
        <label>Rua:</label>
        <input type="text" name="rua" required><br><br>
        
        <label>Bairro:</label>
        <input type="text" name="bairro" required><br><br>
        
        <label>Número:</label>
        <input type="text" name="numero" required><br><br>
        
        <label>Horário de Funcionamento:</label>
        <input type="text" name="horario_funcionamento" required><br><br>
        
        <label>Sobre:</label>
        <input type="text" name="sobre" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>

    <a href="/bella_back/list-restaurante">Ver todos os restaurantes</a>
</body>
</html>