<?php
include 'conexion.php';

$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px gray;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #28a745;
            color: white;
        }
        tr:hover {
            background: #f1f1f1;
        }
    </style>
</head>
<body>
    <h2>Lista de Productos</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Código</th>
            <th>Descripción</th>
            <th>Categoría</th>
            <th>Cantidad</th>
            <th>Precio Compra</th>
            <th>Precio Venta</th>
            <th>Proveedor</th>
            <th>Fecha de Caducidad</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($row['codigo']) . "</td>";
            echo "<td>" . htmlspecialchars($row['descripcion']) . "</td>";
            echo "<td>" . htmlspecialchars($row['categoria']) . "</td>";
            echo "<td>" . htmlspecialchars($row['cantidad']) . "</td>";
            echo "<td>$" . number_format($row['precio_compra'], 2) . "</td>";
            echo "<td>$" . number_format($row['precio_venta'], 2) . "</td>";
            echo "<td>" . htmlspecialchars($row['proveedor']) . "</td>";
            echo "<td>" . htmlspecialchars($row['fecha_caducidad']) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>