<?php
require_once __DIR__ . '/../models/api.php';

class ApiController {
    // Exibe o formulário de cadastro de API
    public function showForm() {
        include __DIR__ . '/../views/api_form.php';
    }

    // Salva uma nova API
    public function saveApi() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $api = new Api();
            $api->nome = $_POST['nome'];
            $api->url = $_POST['url'];
            $api->descricao = $_POST['descricao'];

            if ($api->save()) {
                header('Location: /bella_back/list-api');
                exit;
            } else {
                echo "Erro ao salvar API!";
            }
        }
    }

    // Lista todas as APIs
    public function listApi() {
        $api = new Api();
        $apis = $api->getAll();
        include __DIR__ . '/../views/api_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $api = new Api();
        $apiInfo = $api->getById($id);
        include __DIR__ . '/../views/update_api_form.php';
    }

    // Atualiza uma API
    public function updateApi() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $api = new Api();
            $api->id_api = $_POST['id_api'];
            $api->nome = $_POST['nome'];
            $api->url = $_POST['url'];
            $api->descricao = $_POST['descricao'];

            if ($api->update()) {
                header('Location: /bella_back/list-api');
                exit;
            } else {
                echo "Erro ao atualizar API!";
            }
        }
    }

    // Exclui uma API
    public function deleteApi() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $api = new Api();
            $api->id_api = $_POST['id_api'];

            if ($api->delete()) {
                header('Location: /bella_back/list-api');
                exit;
            } else {
                echo "Erro ao excluir API!";
            }
        }
    }
}