<?php
require_once('secret.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
    }
catch(PDOException $e)
    {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

$conn = null;
?> 