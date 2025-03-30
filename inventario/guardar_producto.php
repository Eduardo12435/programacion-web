<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $codigo = $_POST["codigo"];
    $descripcion = $_POST["descripcion"];
    $categoria = $_POST["categoria"];
    $cantidad = $_POST["cantidad"];
    $precio_compra = $_POST["precio_compra"];
    $precio_venta = $_POST["precio_venta"];
    $proveedor = $_POST["proveedor"];
    $fecha_caducidad = $_POST["fecha_caducidad"];

    $sql = "INSERT INTO productos (nombre, codigo, descripcion, categoria, cantidad, precio_compra, precio_venta, proveedor, fecha_caducidad) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssiddss", $nombre, $codigo, $descripcion, $categoria, $cantidad, $precio_compra, $precio_venta, $proveedor, $fecha_caducidad);

    if ($stmt->execute()) {
        echo "Producto registrado exitosamente. <a href='index.php'>Registrar otro producto</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>