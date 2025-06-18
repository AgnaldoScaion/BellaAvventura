<?php

require_once __DIR__ . '/../config/database.php';

class Adm {
    private $conn;
    private $table_name = "adm";

    public $id_adm;
    public $nome_completo;
    public $data_nascimento;
    public $CPF;
    public $e_mail;
    public $senha_adm;
    public $nome_perfil;
    public $fk_usuario_id_usuario;

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
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id_adm = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " 
            (nome_completo, data_nascimento, CPF, e_mail, senha_adm, nome_perfil, fk_usuario_id_usuario) 
            VALUES (:nome_completo, :data_nascimento, :CPF, :e_mail, :senha_adm, :nome_perfil, :fk_usuario_id_usuario)";
        $stmt = $this->conn->prepare($query);

        $senhaHash = password_hash($this->senha_adm, PASSWORD_DEFAULT);

        $stmt->bindParam(':nome_completo', $this->nome_completo);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':CPF', $this->CPF);
        $stmt->bindParam(':e_mail', $this->e_mail);
        $stmt->bindParam(':senha_adm', $senhaHash);
        $stmt->bindParam(':nome_perfil', $this->nome_perfil);
        $stmt->bindParam(':fk_usuario_id_usuario', $this->fk_usuario_id_usuario);

        return $stmt->execute();
    }

    public function update() {
        if (!empty($this->senha_adm)) {
            $senhaHash = password_hash($this->senha_adm, PASSWORD_DEFAULT);
            $query = "UPDATE " . $this->table_name . " 
                SET nome_completo = :nome_completo,
                    data_nascimento = :data_nascimento,
                    CPF = :CPF,
                    e_mail = :e_mail,
                    senha_adm = :senha_adm,
                    nome_perfil = :nome_perfil,
                    fk_usuario_id_usuario = :fk_usuario_id_usuario
                WHERE id_adm = :id_adm";
        } else {
            $query = "UPDATE " . $this->table_name . " 
                SET nome_completo = :nome_completo,
                    data_nascimento = :data_nascimento,
                    CPF = :CPF,
                    e_mail = :e_mail,
                    nome_perfil = :nome_perfil,
                    fk_usuario_id_usuario = :fk_usuario_id_usuario
                WHERE id_adm = :id_adm";
        }

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome_completo', $this->nome_completo);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':CPF', $this->CPF);
        $stmt->bindParam(':e_mail', $this->e_mail);
        $stmt->bindParam(':nome_perfil', $this->nome_perfil);
        $stmt->bindParam(':fk_usuario_id_usuario', $this->fk_usuario_id_usuario);
        $stmt->bindParam(':id_adm', $this->id_adm, PDO::PARAM_INT);

        if (!empty($this->senha_adm)) {
            $stmt->bindParam(':senha_adm', $senhaHash);
        }

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_adm = :id_adm";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_adm', $this->id_adm, PDO::PARAM_INT);
        return $stmt->execute();
    }
}