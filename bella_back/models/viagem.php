<?php

require_once '../config/database.php';

class Viagem {
    private $conn;
    private $table_name = "viagem";

    public $id_viagem;
    public $nome;
    public $destino;
    public $data_inicio;
    public $data_fim;
    public $descricao;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome, destino, data_inicio, data_fim, descricao) 
                  VALUES (:nome, :destino, :data_inicio, :data_fim, :descricao)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':destino', $this->destino);
        $stmt->bindParam(':data_inicio', $this->data_inicio);
        $stmt->bindParam(':data_fim', $this->data_fim);
        $stmt->bindParam(':descricao', $this->descricao);

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