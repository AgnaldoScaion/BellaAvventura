<?php

require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $conn;
    private $table_name = "usuario";

    public $id_usuario;
    public $nome_completo;
    public $data_nascimento;
    public $CPF;
    public $e_mail;
    public $senha;
    public $nome_perfil;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $sql = "SELECT * FROM usuario";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM usuario WHERE id_usuario = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save() {
        $senhaHash = password_hash($this->senha, PASSWORD_DEFAULT);

        $query = "INSERT INTO " . $this->table_name . " 
            (nome_completo, data_nascimento, CPF, e_mail, senha, nome_perfil) 
            VALUES (:nome_completo, :data_nascimento, :CPF, :e_mail, :senha, :nome_perfil)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome_completo', $this->nome_completo);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':CPF', $this->CPF);
        $stmt->bindParam(':e_mail', $this->e_mail);
        $stmt->bindParam(':senha', $senhaHash);
        $stmt->bindParam(':nome_perfil', $this->nome_perfil);

        return $stmt->execute();
    }

    public function update() {
        if (!empty($this->senha)) {
            $senhaHash = password_hash($this->senha, PASSWORD_DEFAULT);
            $query = "UPDATE " . $this->table_name . " 
                SET nome_completo = :nome_completo,
                    data_nascimento = :data_nascimento,
                    CPF = :CPF,
                    e_mail = :e_mail,
                    senha = :senha,
                    nome_perfil = :nome_perfil
                WHERE id_usuario = :id_usuario";
        } else {
            $query = "UPDATE " . $this->table_name . " 
                SET nome_completo = :nome_completo,
                    data_nascimento = :data_nascimento,
                    CPF = :CPF,
                    e_mail = :e_mail,
                    nome_perfil = :nome_perfil
                WHERE id_usuario = :id_usuario";
        }

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome_completo', $this->nome_completo);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':CPF', $this->CPF);
        $stmt->bindParam(':e_mail', $this->e_mail);
        $stmt->bindParam(':nome_perfil', $this->nome_perfil);
        $stmt->bindParam(':id_usuario', $this->id_usuario, PDO::PARAM_INT);

        if (!empty($this->senha)) {
            $stmt->bindParam(':senha', $senhaHash);
        }

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_usuario = :id_usuario";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_usuario', $this->id_usuario, PDO::PARAM_INT);
        return $stmt->execute();
    }
}