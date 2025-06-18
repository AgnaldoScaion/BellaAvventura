<?php

require_once '../config/database.php';

class Viagem {
    private $conn;
    private $table_name = "viagem";

    public $id_viagem;
    public $destino;
    public $data_inicio;
    public $data_fim;
    public $descricao;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " ( destino, data_inicio, data_fim, descricao) 
                  VALUES ( :destino, :data_inicio, :data_fim, :descricao)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':destino', $this->destino);
        $stmt->bindParam(':data_inicio', $this->data_inicio);
        $stmt->bindParam(':data_fim', $this->data_fim);
        $stmt->bindParam(':descricao', $this->descricao);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id_viagem = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
              SET destino = :destino, data_inicio = :data_inicio, data_fim = :data_fim, descricao = :descricao
              WHERE id_viagem = :id_viagem";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':destino', $this->destino);
        $stmt->bindParam(':data_inicio', $this->data_inicio);
        $stmt->bindParam(':data_fim', $this->data_fim);
        $stmt->bindParam(':descricao', $this->descricao);
        $stmt->bindParam(':id_viagem', $this->id_viagem, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_viagem = :id_viagem";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_viagem', $this->id_viagem, PDO::PARAM_INT);
        return $stmt->execute();
    }
}