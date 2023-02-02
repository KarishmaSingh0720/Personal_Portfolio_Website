<?php

class DatabaseConnection
{
    public function __construct()
    {
        $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if($conn->connect_error)
        {
            die('Connection Failed');
        }
        return $this->conn=$conn;
    }
}