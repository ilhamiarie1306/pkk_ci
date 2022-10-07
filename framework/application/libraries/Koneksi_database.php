<?php

class Koneksi_database {

    private $server = 'localhost';
    private $dbname = 'pkk_php_mysql';
    private $user = 'root';
    private $pass = '';
    
    public function __construct() {
    }

    private $conn = null;
    public function connect() {
        try {
            $this->conn = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->dbname, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $this->conn;
        } catch (\Exception $e) {
            echo "Database Error: " . $e->getMessage();
        }
    }
    
    public function __destruct() {
        $this->conn = null;
    }

}

?>