<?php
require_once __DIR__ . '/../models/restaurante.php';

class RestauranteController {
    // Exibe o formulário de cadastro de restaurante
    public function showForm() {
        include __DIR__ . '/../views/restaurante_form.php';
    }

    // Salva um novo restaurante
    public function saveRestaurante() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $restaurante = new Restaurante();
            $restaurante->nome = $_POST['nome'];
            $restaurante->telefone = $_POST['telefone'];
            $restaurante->estado = $_POST['estado'];
            $restaurante->cidade = $_POST['cidade'];
            $restaurante->rua = $_POST['rua'];
            $restaurante->bairro = $_POST['bairro'];
            $restaurante->numero = $_POST['numero'];
            $restaurante->horario_funcionamento = $_POST['horario_funcionamento'];
            $restaurante->sobre = $_POST['sobre'];

            if ($restaurante->save()) {
                header('Location: /bella_back/list-restaurante');
                exit;
            } else {
                echo "Erro ao salvar restaurante!";
            }
        }
    }

    // Lista todos os restaurantes
    public function listRestaurante() {
        $restaurante = new Restaurante();
        $restaurantes = $restaurante->getAll();
        include __DIR__ . '/../views/restaurante_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $restaurante = new Restaurante();
        $restauranteInfo = $restaurante->getById($id);
        include __DIR__ . '/../views/update_restaurante_form.php';
    }

    // Atualiza um restaurante
    public function updateRestaurante() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $restaurante = new Restaurante();
            $restaurante->id_restaurante = $_POST['id_restaurante'];
            $restaurante->nome = $_POST['nome'];
            $restaurante->telefone = $_POST['telefone'];
            $restaurante->estado = $_POST['estado'];
            $restaurante->cidade = $_POST['cidade'];
            $restaurante->rua = $_POST['rua'];
            $restaurante->bairro = $_POST['bairro'];
            $restaurante->numero = $_POST['numero'];
            $restaurante->horario_funcionamento = $_POST['horario_funcionamento'];
            $restaurante->sobre = $_POST['sobre'];

            if ($restaurante->update()) {
                header('Location: /bella_back/list-restaurante');
                exit;
            } else {
                echo "Erro ao atualizar restaurante!";
            }
        }
    }

    // Exclui um restaurante
    public function deleteRestaurante() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $restaurante = new Restaurante();
            $restaurante->id_restaurante = $_POST['id_restaurante'];

            if ($restaurante->delete()) {
                header('Location: /bella_back/list-restaurante');
                exit;
            } else {
                echo "Erro ao excluir restaurante!";
            }
        }
    }
}