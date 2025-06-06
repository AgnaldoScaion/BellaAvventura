<?php

require_once '../config/database.php';

class Ponto {
    private $conn;
    private $table_name = "pontos";

    public $id_ponto;
    public $quantidade;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (quantidade) 
                  VALUES (:quantidade)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':quantidade', $this->quantidade);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}