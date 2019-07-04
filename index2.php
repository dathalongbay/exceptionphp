<?php

include_once "database.php";

try {
    $db = new Database();

    $conn = $db->connection;
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

}catch (Exception $e) {

    echo "<br>" . __FILE__;
    echo "<pre>";
    print_r($e);
    echo "</pre>";

    echo 'Message: ' .$e->getMessage();
}

echo "<br>chạy tiếp ...";