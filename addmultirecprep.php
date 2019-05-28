<?php
require_once('secret.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO laptops (brand, name, price, memory)
    VALUES (:brand, :name, :price, :memory)");
    $stmt->bindParam(':brand', $brand);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':memory', $memory);

    // insert a row
    $brand = "Asus";
    $name = "Model A";
    $price = "350";
    $memory = "4";
    $stmt->execute();

    // insert another row
    $brand = "Asus";
    $name = "Model B";
    $price = "450";
    $memory = "4";
    $stmt->execute();

    // insert another row
    $brand = "Asus";
    $name = "Model C";
    $price = "550";
    $memory = "8";
    $stmt->execute();

    echo "Three new records created successfully with prepared statement";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?> 