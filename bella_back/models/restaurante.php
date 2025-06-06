<?php

require_once '../config/database.php';

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

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome, telefone, estado, cidade, rua, bairro, numero, horario_funcionamento, sobre) 
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