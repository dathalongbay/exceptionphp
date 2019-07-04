<?php

include_once "database1.php";


$db = new Database();

$conn = $db->connection;
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<br>chạy tiếp ...";
