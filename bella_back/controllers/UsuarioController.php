<?php

require_once __DIR__ . '/../models/usuario.php';

class UsuarioController {
    public function showForm() {
        include __DIR__ . '/../views/usuario_form.php';
    }

    public function saveUsuario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario();
            $usuario->nome_completo = $_POST['nome_completo'];
            $usuario->data_nascimento = $_POST['data_nascimento'];
            $usuario->CPF = $_POST['CPF'];
            $usuario->e_mail = $_POST['e_mail'];
            $usuario->senha = $_POST['senha'];
            $usuario->nome_perfil = $_POST['nome_perfil'];

            if ($usuario->save()) {
                header('Location: /bella_back/list-usuario');
                exit;
            } else {
                echo "Erro ao cadastrar o usuário.";
            }
        } else {
            // Exibe o formulário de cadastro se não for POST
            include __DIR__ . '/../views/usuario_form.php';
        }
    }

    public function listUsuario() {
        $usuario = new Usuario();
        $usuarios = $usuario->getAll();
        include __DIR__ . '/../views/usuario_list.php';
    }

    public function showUpdateForm($id) {
        $usuario = new Usuario();
        $usuarioInfo = $usuario->getById($id);
        include __DIR__ . '/../views/usuario_form.php';
    }

    public function updateUsuario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario();
            $usuario->id_usuario = $_POST['id_usuario'];
            $usuario->nome_completo = $_POST['nome_completo'];
            $usuario->data_nascimento = $_POST['data_nascimento'];
            $usuario->CPF = $_POST['CPF'];
            $usuario->e_mail = $_POST['e_mail'];
            $usuario->nome_perfil = $_POST['nome_perfil'];
            $usuario->senha = !empty($_POST['senha']) ? $_POST['senha'] : null;

            if ($usuario->update()) {
                header('Location: /bella_back/list-usuario');
                exit;
            } else {
                echo "Erro ao atualizar o usuário.";
            }
        }
    }

    public function deleteUsuario() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario();
            $usuario->id_usuario = $_POST['id_usuario'];
            if ($usuario->delete()) {
                header('Location: /bella_back/list-usuario');
                exit;
            } else {
                echo "Erro ao excluir o usuário.";
            }
        }
    }
}