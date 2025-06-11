<?php

require_once __DIR__ . '/../config/database.php';

class Hotel {
    private $conn;
    private $table_name = "HOTEL";

    public $id_hotel;
    public $nome_hotel;
    public $estado;
    public $cidade;
    public $bairro;
    public $rua;
    public $numero;

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
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id_hotel = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " 
            (nome_hotel, estado, cidade, bairro, rua, numero) 
            VALUES (:nome_hotel, :estado, :cidade, :bairro, :rua, :numero)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome_hotel', $this->nome_hotel);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':numero', $this->numero);

        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
            SET nome_hotel = :nome_hotel,
                estado = :estado,
                cidade = :cidade,
                bairro = :bairro,
                rua = :rua,
                numero = :numero
            WHERE id_hotel = :id_hotel";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome_hotel', $this->nome_hotel);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':id_hotel', $this->id_hotel, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_hotel = :id_hotel";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_hotel', $this->id_hotel, PDO::PARAM_INT);
        return $stmt->execute();
    }
}