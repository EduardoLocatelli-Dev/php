<?php 

$conn = new PDO("msql:host=localhost;dbname=dbphp7", "root", "root");

$con->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Delete OK!";

?>