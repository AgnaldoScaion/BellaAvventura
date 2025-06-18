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
            $ponto_turistico = new PontoTuristico();
            $ponto_turistico->nome = $_POST['nome'];
            $ponto_turistico->sobre = $_POST['sobre'];
            $ponto_turistico->numero = $_POST['numero'];
            $ponto_turistico->rua = $_POST['rua'];
            $ponto_turistico->bairro = $_POST['bairro'];
            $ponto_turistico->cidade = $_POST['cidade'];
            $ponto_turistico->estado = $_POST['estado'];

            if ($ponto_turistico->save()) {
                header('Location: /bella_back/list-pontoturistico');
                exit;
            } else {
                echo "Erro ao salvar o ponto turístico!";
            }
        } else {
            // Exibe o formulário ao acessar via GET
            include __DIR__ . '/../views/pontoturistico_form.php';
        }
    }

    // Lista todos os pontos turísticos
    public function listPontoTuristico() {
        $ponto_turistico = new PontoTuristico();
        $pontos_turisticos = $ponto_turistico->getAll();
        include __DIR__ . '/../views/pontoturistico_list.php';
    }

    // Exibe o formulário de atualização
    public function showUpdateForm($id) {
        $ponto_turistico = new PontoTuristico();
        $pontoturisticoInfo = $ponto_turistico->getById($id);
        include __DIR__ . '/../views/pontoturistico_form.php';
    }

    // Atualiza um ponto turístico
    public function updatePontoTuristico() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ponto_turistico = new PontoTuristico();
            $ponto_turistico->id_pontoturistico = $_POST['id_pontoturistico'];
            $ponto_turistico->nome = $_POST['nome'];
            $ponto_turistico->sobre = $_POST['sobre'];
            $ponto_turistico->numero = $_POST['numero'];
            $ponto_turistico->rua = $_POST['rua'];
            $ponto_turistico->bairro = $_POST['bairro'];
            $ponto_turistico->cidade = $_POST['cidade'];
            $ponto_turistico->estado = $_POST['estado'];

            if ($ponto_turistico->update()) {
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
            $ponto_turistico = new PontoTuristico();
            $ponto_turistico->id_pontoturistico = $_POST['id_pontoturistico'];

            if ($ponto_turistico->delete()) {
                header('Location: /bella_back/list-pontoturistico');
                exit;
            } else {
                echo "Erro ao excluir o ponto turístico!";
            }
        }
    }
}