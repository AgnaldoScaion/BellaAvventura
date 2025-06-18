<?php

require_once __DIR__ . '/../config/database.php';

class Pontos {
    private $conn;
    private $table_name = "ponto";

    public $id_ponto;
    public $quantidade;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
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

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET quantidade = :quantidade WHERE id_ponto = :id_ponto";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':quantidade', $this->quantidade);
        $stmt->bindParam(':id_ponto', $this->id_ponto, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_ponto = :id_ponto";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_ponto', $this->id_ponto, PDO::PARAM_INT);
        return $stmt->execute();
    }
}