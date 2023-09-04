<?php

class Database {
    private string $host = 'localhost';
    private string $dbname = 'php_project_db';
    private string $username = 'root';
    private string $password = 'Laravel239';
    public PDO $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
