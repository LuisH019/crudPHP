<?php
abstract class GenericDAO {
    protected $server = "127.0.0.1";
    protected $database = "db_ifpr";
    protected $user = "root";
    protected $pass = "";
    protected $conn;

    function __construct() {
        $this->conn = new PDO(
            "mysql:host=$this->server;dbname=$this->database",
            $this->user, $this->pass);
    }
}

?>