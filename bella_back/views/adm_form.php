<!-- filepath: c:\xampp\htdocs\bella_back\views\adm_form.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($admInfo) ? 'Editar Administrador' : 'Cadastro de Administrador'; ?></title>
    <link rel="stylesheet" href="/bella_back/public/css/style.css">
    <style>
/* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Estilo geral do body */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    padding: 20px;
}

/* Título da página */
h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

/* Estilo do formulário */
form {
    max-width: 600px;
    margin: 0 auto;
    background-color: #ffffff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    font-weight: bold;
    margin-top: 15px;
    color: #444;
}

input[type="text"],
input[type="date"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Botão de envio */
input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 4px;
    margin-top: 25px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Link inferior */
a {
    display: block;
    text-align: center;
    margin-top: 20px;
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Mensagem pequena */
small {
    color: #666;
    font-size: 0.9em;
}
  </style>
</head>
<body>
    <h1><?php echo isset($admInfo) ? 'Editar Administrador' : 'Cadastro de Administrador'; ?></h1>
    <form action="<?php echo isset($admInfo) ? '/bella_back/update-adm' : '/bella_back/save-adm'; ?>" method="POST">
        <?php if (isset($admInfo)): ?>
            <input type="hidden" name="id_adm" value="<?php echo htmlspecialchars($admInfo['id_adm']); ?>">
        <?php endif; ?>

        <label>Nome Completo:</label>
        <input type="text" name="nome_completo" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['nome_completo']) : ''; ?>"><br><br>

        <label>Data de Nascimento:</label>
        <input type="date" name="data_nascimento" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['data_nascimento']) : ''; ?>"><br><br>

        <label>CPF:</label>
        <input type="text" name="CPF" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['CPF']) : ''; ?>"><br><br>

        <label>E-mail:</label>
        <input type="email" name="e_mail" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['e_mail']) : ''; ?>"><br><br>

        <label>Senha:</label>
        <input type="password" name="senha_adm"><br><br>
        <?php if (isset($admInfo)): ?>
            <small>Preencha apenas se desejar alterar a senha.</small><br><br>
        <?php endif; ?>

        <label>Perfil:</label>
        <input type="text" name="nome_perfil" required value="<?php echo isset($admInfo) ? htmlspecialchars($admInfo['nome_perfil']) : ''; ?>"><br><br>

        <input type="submit" value="<?php echo isset($admInfo) ? 'Atualizar' : 'Cadastrar'; ?>">
    </form>

    <a href="/bella_back/list-adm">Ver todos os administradores</a>
</body>
</html>