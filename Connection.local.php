<?php

    class ConnectionLocal extends PDO {

        const HOSTNAME = "ec2-34-192-210-139.compute-1.amazonaws.com";
        const USERNAME = "lethxmuoyakshh";
        const PASSWORD = "623d8ed19ae8d5998f43a9925564cc9b500bc8e6174842829a2eef13ce64b157";
        const SCHEMA = "d5emuu16f31f5p";
        const PORT = 5432;
        
        private $conn;

        # magic method
        public function __construct() {
            $key = "strval";
            $dsn = "pgsql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
            $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function getConnection() {
            $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
            return $this->conn;
        }
    }