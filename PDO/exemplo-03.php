<?php 

$conn = new PDO("msql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN, $login");
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK!";

?>