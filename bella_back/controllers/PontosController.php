<?php

require_once __DIR__ . '/../config/database.php';

require_once __DIR__ . '/../models/pontos.php';

class PontosController {

    public function listPonto() {
        $ponto = new Pontos();
        $pontos = $ponto->getAll();
        include __DIR__ . '/../views/ponto_list.php';
    }

    private $conn;
    private $table_name = "ponto";

    public $id_ponto;
    public $quantidade;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function savePonto() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $ponto = new Pontos();
            $ponto->quantidade = $_POST['quantidade'];
            // Se tiver id_usuario, adicione aqui: $ponto->id_usuario = $_POST['id_usuario'];
            if ($ponto->save()) {
                header('Location: /bella_back/list-ponto');
                exit;
            } else {
                echo "Erro ao salvar ponto!";
            }
        } else {
            include __DIR__ . '/../views/ponto_form.php';
        }
    }

    public function getAll() {
        $sql = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id_ponto = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (quantidade) VALUES (:quantidade)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':quantidade', $this->quantidade);
        return $stmt->execute();
    }

    public function showUpdateForm($id) {
        $ponto = new Pontos();
        $pontoInfo = $ponto->getById($id);
        include __DIR__ . '/../views/ponto_form.php';
    }

    public function updatePonto() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ponto = new Pontos();
        $ponto->id_ponto = $_POST['id_ponto'];
        $ponto->quantidade = $_POST['quantidade'];
        // Se tiver id_usuario, adicione aqui: $ponto->id_usuario = $_POST['id_usuario'];

        if ($ponto->update()) {
            header('Location: /bella_back/list-ponto');
            exit;
        } else {
            echo "Erro ao atualizar o ponto!";
        }
    }
}

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_ponto = :id_ponto";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_ponto', $this->id_ponto, PDO::PARAM_INT);
        return $stmt->execute();
    }

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