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

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f0f2f5;
    padding: 30px;
}

/* Título */
h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

/* Estilo do formulário */
form {
    max-width: 500px;
    margin: 0 auto;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #444;
}

input[type="text"],
input[type="date"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 18px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border 0.3s;
}

input[type="text"]:focus,
input[type="date"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    border-color: #007BFF;
    outline: none;
}

/* Mensagem abaixo do campo senha */
small {
    color: #666;
    display: block;
    margin-bottom: 18px;
}

/* Botão de envio */
input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Link inferior */
a {
    display: block;
    text-align: center;
    margin-top: 25px;
    color: #007BFF;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
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