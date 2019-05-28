<?php
require_once('secret.php');
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$brand = $_GET['q'];
$sql= "SELECT * FROM laptops WHERE brand = :brand"; 
$stmt = $conn->prepare($sql);
$stmt->bindParam(':brand', $brand, PDO::PARAM_STR); 
$stmt->execute();
$result = $stmt->fetchAll();
foreach($result as $row){
   echo $row['id'].', '.$row['brand'].', '.$row['name'].', '.$row['price'].', '.$row['memory']."\n";
}
$conn = null;
?> 