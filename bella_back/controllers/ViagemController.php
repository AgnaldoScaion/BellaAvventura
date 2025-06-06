<?php
require_once __DIR__ . '/../models/viagem.php';

class ViagemController {
    // Exibe o formulário de cadastro de viagem
    public function showForm() {
        include __DIR__ . '/../views/viagem_form.php';
    }

    // Salva uma nova viagem
    public function saveViagem() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $viagem = new Viagem();
            $viagem->nome = $_POST['nome'];
            $viagem->destino = $_POST['destino'];
            $viagem->data_inicio = $_POST['data_inicio'];
            $viagem->data_fim = $_POST['data_fim'];
            $viagem->descricao = $_POST['descricao'];

            if ($viagem->save()) {
                header('Location: /bella_back/list-viagem');
                exit;
            } else {
                echo "Erro ao salvar viagem!";
            }
        }
    }

    // Lista todas as viagens
    public function listViagem() {
        $viagem = new Viagem();
        $viagens = $viagem->getAll();
        include __DIR__ . '/../views/viagem_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $viagem = new Viagem();
        $viagemInfo = $viagem->getById($id);
        include __DIR__ . '/../views/update_viagem_form.php';
    }

    // Atualiza uma viagem
    public function updateViagem() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $viagem = new Viagem();
            $viagem->id_viagem = $_POST['id_viagem'];
            $viagem->nome = $_POST['nome'];
            $viagem->destino = $_POST['destino'];
            $viagem->data_inicio = $_POST['data_inicio'];
            $viagem->data_fim = $_POST['data_fim'];
            $viagem->descricao = $_POST['descricao'];

            if ($viagem->update()) {
                header('Location: /bella_back/list-viagem');
                exit;
            } else {
                echo "Erro ao atualizar viagem!";
            }
        }
    }

    // Exclui uma viagem
    public function deleteViagem() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $viagem = new Viagem();
            $viagem->id_viagem = $_POST['id_viagem'];

            if ($viagem->delete()) {
                header('Location: /bella_back/list-viagem');
                exit;
            } else {
                echo "Erro ao excluir viagem!";
            }
        }
    }
}