<?php


class Database {

    public $connection;

    public function __construct() {
        $connection = new mysqli("localhost", "root", "", "a123aa");

        if ($connection->connect_error) {
            //die("Không thể kết nối đến CSDL");
        }

        $this->connection = $connection;
    }

}