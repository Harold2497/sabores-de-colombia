<?php
session_start();
include "conexion.php";

$correo = $_POST['correo'];
$clave = $_POST['clave'];

$sql = "SELECT * FROM usuarios WHERE correo = ? AND clave = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$correo, $clave]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
  $_SESSION['usuario'] = $user['nombre'];
  $_SESSION['tipo'] = $user['tipo'];
  echo "Bienvenido, " . $user['nombre'] . " (" . $user['tipo'] . ")";
} else {
  echo "Credenciales incorrectas.";
}
?>
