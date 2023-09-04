<?php

require_once __DIR__ . '/../config/db.php';

class Department {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll(): false|array
    {
        $query = "SELECT * FROM departments";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($name): bool
    {
        $query = "INSERT INTO departments (name) VALUES (:name)";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function delete($id): bool
    {
        $query = "DELETE FROM departments WHERE id = :id";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
