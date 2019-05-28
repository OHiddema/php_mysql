<?php
require_once('secret.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "INSERT INTO laptops (brand, name, price, memory) VALUES ('HP', '15-ay082nd', 599, 4)";
$conn->exec($sql);
$last_id = $conn->lastInsertId();
echo "New record created successfully. Last inserted ID is: " . $last_id;
$conn = null;
?>