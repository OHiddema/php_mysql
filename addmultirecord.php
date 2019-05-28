<?php
require_once('secret.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// begin the transaction
$conn->beginTransaction();
// our SQL statements
$conn->exec("INSERT INTO laptops (brand, name, price, memory)
VALUES ('HP', 'modelX', 699, 4)");
$conn->exec("INSERT INTO laptops (brand, name, price, memory)
VALUES ('HP', 'modelY', 799, 8)");
$conn->exec("INSERT INTO laptops (brand, name, price, memory)
VALUES ('HP', 'modelZ', 899, 16)");
// commit the transaction
$conn->commit();
echo "Three new records created successfully";
$conn = null;
?> 