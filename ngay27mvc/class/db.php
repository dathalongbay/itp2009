<?php
class Database {

    public $serverName = "localhost";
    public $userName = "root";
    public $password = "";
    public $dbName = "dienthoai";
    public $connection;

    public function __construct()
    {
        echo "<br> " . __METHOD__;
        if (!$this->connection) {
            $this->connect();
        }
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        if ($this->connection) {
            $this->disconnect();
        }
    }

    public function connect() {

        try {

            $this->connection = new PDO("mysql:host=$this->serverName;dbname=$this->dbName", $this->userName, $this->password);

            // set the PDO error mode to exception

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
            die;

        }
    }

    public function disconnect() {
        $this->connection = null;
    }

}
