<?php

require_once __DIR__ . '/../config/database.php';

class Restaurante {
    private $conn;
    private $table_name = "restaurante";

    public $id_restaurante;
    public $nome;
    public $telefone;
    public $estado;
    public $cidade;
    public $rua;
    public $bairro;
    public $numero;
    public $horario_funcionamento;
    public $sobre;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $sql = "SELECT * FROM restaurante";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM restaurante WHERE id_restaurante = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " 
            (nome, telefone, estado, cidade, rua, bairro, numero, horario_funcionamento, sobre) 
            VALUES (:nome, :telefone, :estado, :cidade, :rua, :bairro, :numero, :horario_funcionamento, :sobre)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':horario_funcionamento', $this->horario_funcionamento);
        $stmt->bindParam(':sobre', $this->sobre);

        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
            SET nome = :nome,
                telefone = :telefone,
                estado = :estado,
                cidade = :cidade,
                rua = :rua,
                bairro = :bairro,
                numero = :numero,
                horario_funcionamento = :horario_funcionamento,
                sobre = :sobre
            WHERE id_restaurante = :id_restaurante";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':horario_funcionamento', $this->horario_funcionamento);
        $stmt->bindParam(':sobre', $this->sobre);
        $stmt->bindParam(':id_restaurante', $this->id_restaurante, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_restaurante = :id_restaurante";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_restaurante', $this->id_restaurante, PDO::PARAM_INT);
        return $stmt->execute();
    }
}