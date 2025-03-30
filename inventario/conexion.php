<?php
$servidor = "localhost";
$usuario = "root"; // Cambia si tienes un usuario diferente
$password = ""; // Si tu MySQL tiene contraseña, ponla aquí
$base_datos = "tienda";

$conn = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>