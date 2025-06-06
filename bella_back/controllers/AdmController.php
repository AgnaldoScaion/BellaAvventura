<?php
require_once __DIR__ . '/../models/adm.php';

class AdmController {
    // Exibe o formulário de cadastro de administrador
    public function showForm() {
        include __DIR__ . '/../views/adm_form.php';
    }

    // Salva um novo administrador
    public function saveAdm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adm = new Adm();
            $adm->nome_completo = $_POST['nome_completo'];
            $adm->data_nascimento = $_POST['data_nascimento'];
            $adm->CPF = $_POST['CPF'];
            $adm->e_mail = $_POST['e_mail'];
            $adm->senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
            $adm->nome_perfil = $_POST['nome_perfil'];

            if ($adm->save()) {
                header('Location: /bella_back/list-adm');
                exit;
            } else {
                echo "Erro ao salvar administrador!";
            }
        }
    }

    // Lista todos os administradores
    public function listAdm() {
        $adm = new Adm();
        $adms = $adm->getAll();
        include __DIR__ . '/../views/adm_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $adm = new Adm();
        $admInfo = $adm->getById($id);
        include __DIR__ . '/../views/update_adm_form.php';
    }

    // Atualiza um administrador
    public function updateAdm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adm = new Adm();
            $adm->id_adm = $_POST['id_adm'];
            $adm->nome_completo = $_POST['nome_completo'];
            $adm->data_nascimento = $_POST['data_nascimento'];
            $adm->CPF = $_POST['CPF'];
            $adm->e_mail = $_POST['e_mail'];
            $adm->senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
            $adm->nome_perfil = $_POST['nome_perfil'];

            if ($adm->update()) {
                header('Location: /bella_back/list-adm');
                exit;
            } else {
                echo "Erro ao atualizar administrador!";
            }
        }
    }

    // Exclui um administrador
    public function deleteAdm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adm = new Adm();
            $adm->id_adm = $_POST['id_adm'];

            if ($adm->delete()) {
                header('Location: /bella_back/list-adm');
                exit;
            } else {
                echo "Erro ao excluir administrador!";
            }
        }
    }
}