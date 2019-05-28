<?php
require_once('secret.php');

try {
    $conn = new PDO("mysql:host=$servername;dbname=".$dbname, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE `laptops` (
      `id` int(6) NOT NULL AUTO_INCREMENT,
      `brand` varchar(30) NOT NULL,
      `name` varchar(30) NOT NULL,
      `price` decimal(10,0) NOT NULL,
      `memory` decimal(10,0) NOT NULL,
      PRIMARY KEY (`id`)
     ) ENGINE=InnoDB DEFAULT CHARSET=latin1";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table laptops created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>