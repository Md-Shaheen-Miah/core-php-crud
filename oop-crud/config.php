<?php
class Config {
    private $conn;

    public function getConnection() {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=oop_php", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>



$config = new Config();
$conn = $config->getConnection();
