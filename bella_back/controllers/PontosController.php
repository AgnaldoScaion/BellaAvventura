<?php
require_once __DIR__ . '/../models/pontos.php';

class PontosController {
    // Exibe o formulário de cadastro de ponto
    public function showForm() {
        include __DIR__ . '/../views/ponto_form.php';
    }

    // Salva um novo ponto
    public function savePonto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ponto = new Pontos();
            $ponto->quantidade = $_POST['quantidade'];

            if ($ponto->save()) {
                header('Location: /bella_back/list-ponto');
                exit;
            } else {
                echo "Erro ao salvar ponto!";
            }
        }
    }

    // Lista todos os pontos
    public function listPonto() {
        $ponto = new Pontos();
        $pontos = $ponto->getAll();
        include __DIR__ . '/../views/ponto_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $ponto = new Pontos();
        $pontoInfo = $ponto->getById($id);
        include __DIR__ . '/../views/update_ponto_form.php';
    }

    // Atualiza um ponto
    public function updatePonto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ponto = new Pontos();
            $ponto->id_ponto = $_POST['id_ponto'];
            $ponto->quantidade = $_POST['quantidade'];

            if ($ponto->update()) {
                header('Location: /bella_back/list-ponto');
                exit;
            } else {
                echo "Erro ao atualizar ponto!";
            }
        }
    }

    // Exclui um ponto
    public function deletePonto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ponto = new Pontos();
            $ponto->id_ponto = $_POST['id_ponto'];

            if ($ponto->delete()) {
                header('Location: /bella_back/list-ponto');
                exit;
            } else {
                echo "Erro ao excluir ponto!";
            }
        }
    }
}