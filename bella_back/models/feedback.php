<?php

require_once '../config/database.php';

class Feedback {
    private $conn;
    private $table_name = "feedbacks";

    public $id_feedback;
    public $feedback;
    public $estrelas;
    public $quantidade_feedbacks;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getById($id) {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id_feedback = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (feedback, estrelas, quantidade_feedbacks) 
                  VALUES (:feedback, :estrelas, :quantidade_feedbacks)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':feedback', $this->feedback);
        $stmt->bindParam(':estrelas', $this->estrelas);
        $stmt->bindParam(':quantidade_feedbacks', $this->quantidade_feedbacks);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                SET feedback = :feedback, estrelas = :estrelas, quantidade_feedbacks = :quantidade_feedbacks 
                WHERE id_feedback = :id_feedback";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':feedback', $this->feedback);
        $stmt->bindParam(':estrelas', $this->estrelas);
        $stmt->bindParam(':quantidade_feedbacks', $this->quantidade_feedbacks);
        $stmt->bindParam(':id_feedback', $this->id_feedback, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_feedback = :id_feedback";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_feedback', $this->id_feedback, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}