<?php

require_once __DIR__ . '/../config/database.php';

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

    public function getAll() {
        $sql = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id_pontoturistico = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " 
            (nome, sobre, numero, rua, bairro, cidade, estado) 
            VALUES (:nome, :sobre, :numero, :rua, :bairro, :cidade, :estado)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':sobre', $this->sobre);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':estado', $this->estado);

        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
            SET nome = :nome,
                sobre = :sobre,
                numero = :numero,
                rua = :rua,
                bairro = :bairro,
                cidade = :cidade,
                estado = :estado
            WHERE id_pontoturistico = :id_pontoturistico";


        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':sobre', $this->sobre);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':id_pontoturistico', $this->id_pontoturistico, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_pontoturistico = :id_pontoturistico";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pontoturistico', $this->id_pontoturistico, PDO::PARAM_INT);
        return $stmt->execute();
    }
}