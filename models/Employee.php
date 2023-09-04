<?php

require_once '../config/db.php';

class Employee {
    private Database $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll(): false|array
    {
        $query = "SELECT * FROM employees";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($data): bool
    {
        $query = "INSERT INTO employees (email, username, address, telephone, comments, department_id) VALUES (:email, :username, :address, :telephone, :comments, :department_id)";
        $stmt = $this->db->pdo->prepare($query);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':username', $data['username'], PDO::PARAM_STR);
        $stmt->bindParam(':address', $data['address'], PDO::PARAM_STR);
        $stmt->bindParam(':telephone', $data['telephone'], PDO::PARAM_STR);
        $stmt->bindParam(':comments', $data['comments'], PDO::PARAM_STR);
        $stmt->bindParam(':department_id', $data['department_id'], PDO::PARAM_INT);
        return $stmt->execute();
    }
}
