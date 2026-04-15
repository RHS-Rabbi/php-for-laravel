<?php
// 05-constructor-and-destructor

class DatabaseConnection {
    private $connection;

    // constructor - The Constructor objects run during runtime
    public function __construct(
        private string $host,
        private string $dbname
    )
    {
        $this->connection = new PDO (
            "mysql:host={$this->host}; dbname={$this->dbname}"
        );
        echo "Connection has been established";
        
    }
    // destructor - object Time to destroy
    public function __destruct()
    {
        $this->connection = null;
        echo "Connection closed";
    }
}

$db = new DatabaseConnection('localhost', 'blog');







?>