<?php
require_once('secret.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "DELETE FROM laptops WHERE id=1";
$conn->exec($sql);
echo "Record deleted successfully";
$conn = null;
?> 