<?php

require_once '../config/database.php';

class PontoTuristico {
    private $conn;
    private $table_name = "pontos_turisticos";

    public $id_pontoturistico;
    public $nome;
    public $sobre;
    public $numero;
    public $rua;
    public $bairro;
    public $cidade;
    public $estado;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome, sobre, numero, rua, bairro, cidade, estado) 
                  VALUES (:nome, :sobre, :numero, :rua, :bairro, :cidade, :estado)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':sobre', $this->sobre);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':estado', $this->estado);

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