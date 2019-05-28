<?php
require_once('secret.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "UPDATE laptops SET name='dinges' WHERE id=2";
$stmt = $conn->prepare($sql);
$stmt->execute();
echo $stmt->rowCount() . " record UPDATED successfully";
$conn = null;
?> 