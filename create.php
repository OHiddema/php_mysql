<?php
require_once('secret.php');
$conn = new PDO("mysql:host=$servername;dbname=".$dbname, $username, $password);
$sql = "CREATE TABLE `laptops` (
    `id` int(6) NOT NULL AUTO_INCREMENT,
    `brand` varchar(30) NOT NULL,
    `name` varchar(30) NOT NULL,
    `price` decimal(10,0) NOT NULL,
    `memory` decimal(10,0) NOT NULL,
    PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
$conn->exec($sql);
echo "Table laptops created successfully";
$conn = null;
?>