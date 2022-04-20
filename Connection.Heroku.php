<?php

    class ConnectionHeroku extends PDO {
        private $conn;

        public function __construct() {
            $this->conn = new PDO($this->getDSN());
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function getConnection() {
            $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
            return $this->conn;
        }

        private static function getDSN(): string {
            $db = parse_url(getenv("DATABASE_URL"));

            return "pgsql:" . sprintf(
                "host=%s;port=%s;user=%s;password=%s;dbname=%s",
                $db["host"],
                $db["port"],
                $db["user"],
                $db["pass"],
                ltrim($db["path"], "/")
            );
        }
    } 