<?php
$db = new SQLite3("db/sabores.sqlite");

// Crear tabla usuarios
$db->exec("CREATE TABLE IF NOT EXISTS usuarios (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  nombre TEXT,
  correo TEXT UNIQUE,
  clave TEXT,
  tipo TEXT
)");

// Crear tabla platos
$db->exec("CREATE TABLE IF NOT EXISTS platos (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  nombre TEXT,
  descripcion TEXT,
  precio INTEGER
)");

$db->exec("INSERT INTO usuarios (nombre, correo, clave, tipo) VALUES
  ('Administrador', 'admin@restaurante.com', '123456', 'admin'),
  ('Cliente', 'cliente@correo.com', 'cliente123', 'cliente')
)");

$db->exec("INSERT INTO platos (nombre, descripcion, precio) VALUES
  ('Bandeja Paisa', 'Plato típico antioqueño', 18000),
  ('Ajiaco', 'Sopa tradicional de Bogotá', 16000),
  ('Tamal Tolimense', 'Envuelto de maíz con carnes', 12000),
  ('Changua', 'Sopa de leche con huevo', 8000),
  ('Sudado de Pollo', 'Guiso con papa y yuca', 14000)
)");

echo "✅ Base de datos creada";
?>
