<?php session_start(); ?>
<form action="validar_login.php" method="POST">
  <label>Correo:</label><br>
  <input type="email" name="correo"><br>
  <label>Contraseña:</label><br>
  <input type="password" name="clave"><br>
  <button type="submit">Ingresar</button>
</form>
