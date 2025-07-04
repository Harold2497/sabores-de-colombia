<?php
header('Content-Type: application/json');
include 'conexion.php';

$sql = "SELECT nombre, descripcion, precio FROM platos";
$stmt = $conn->query($sql);
$platos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($platos);
?>
