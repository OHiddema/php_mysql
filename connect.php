<?php
require_once('secret.php');
$conn = new PDO("mysql:host=$servername", $username, $password);
$sql = "CREATE DATABASE ".$dbname;
$conn->exec($sql);
echo "Database created successfully";
$conn = null;
?>
