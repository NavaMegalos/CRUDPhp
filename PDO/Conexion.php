<?php

namespace PDO;

use PDO;

class Conexion
{
    private $host = "localhost";
    private $database = "CONEXION_PHP";
    private $username = "root";
    private $password = "";
    private $conn;


    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host; dbname=$this->database", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(Exception $e) {
            echo $e;
            mysqli_close($this->conn);
        }
    }

    public function obtener_conexion() {
        return $this->conn;
    }

}