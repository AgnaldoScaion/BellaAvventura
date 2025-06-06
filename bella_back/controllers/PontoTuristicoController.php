<?php
require_once __DIR__ . '/../models/pontoturistico.php';

class PontoTuristicoController {
    // Exibe o formulário de cadastro de ponto turístico
    public function showForm() {
        include __DIR__ . '/../views/pontoturistico_form.php';
    }

    // Salva um novo ponto turístico
    public function savePontoTuristico() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ponto = new PontoTuristico();
            $ponto->nome = $_POST['nome'];
            $ponto->sobre = $_POST['sobre'];
            $ponto->numero = $_POST['numero'];
            $ponto->rua = $_POST['rua'];
            $ponto->bairro = $_POST['bairro'];
            $ponto->cidade = $_POST['cidade'];
            $ponto->estado = $_POST['estado'];

            if ($ponto->save()) {
                header('Location: /bella_back/list-pontoturistico');
                exit;
            } else {
                echo "Erro ao salvar o ponto turístico!";
            }
        }
    }

    // Lista todos os pontos turísticos
    public function listPontoTuristico() {
        $ponto = new PontoTuristico();
        $pontos_turisticos = $ponto->getAll();
        include __DIR__ . '/../views/pontoturistico_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $ponto = new PontoTuristico();
        $pontoInfo = $ponto->getById($id);
        include __DIR__ . '/../views/update_pontoturistico_form.php';
    }

    // Atualiza um ponto turístico
    public function updatePontoTuristico() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ponto = new PontoTuristico();
            $ponto->id_pontoturistico = $_POST['id_pontoturistico'];
            $ponto->nome = $_POST['nome'];
            $ponto->sobre = $_POST['sobre'];
            $ponto->numero = $_POST['numero'];
            $ponto->rua = $_POST['rua'];
            $ponto->bairro = $_POST['bairro'];
            $ponto->cidade = $_POST['cidade'];
            $ponto->estado = $_POST['estado'];

            if ($ponto->update()) {
                header('Location: /bella_back/list-pontoturistico');
                exit;
            } else {
                echo "Erro ao atualizar o ponto turístico!";
            }
        }
    }

    // Exclui um ponto turístico
    public function deletePontoTuristico() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ponto = new PontoTuristico();
            $ponto->id_pontoturistico = $_POST['id_pontoturistico'];

            if ($ponto->delete()) {
                header('Location: /bella_back/list-pontoturistico');
                exit;
            } else {
                echo "Erro ao excluir o ponto turístico!";
            }
        }
    }
}