<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px gray;
            width: 50%;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registrar Nuevo Producto</h2>
        <form action="guardar_producto.php" method="POST">
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required maxlength="100">

            <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" required pattern="^[A-Za-z0-9]{1,10}$">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"></textarea>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="Bebidas">Bebidas</option>
                <option value="Alimentos">Alimentos</option>
                <option value="Limpieza">Limpieza</option>
                <option value="Otro">Otro</option>
            </select>

            <label for="cantidad">Cantidad en Stock:</label>
            <input type="number" id="cantidad" name="cantidad" required min="1">

            <label for="precio_compra">Precio de Compra:</label>
            <input type="number" id="precio_compra" name="precio_compra" required step="0.01" min="0">

            <label for="precio_venta">Precio de Venta:</label>
            <input type="number" id="precio_venta" name="precio_venta" required step="0.01" min="0">

            <label for="proveedor">Proveedor:</label>
            <input type="text" id="proveedor" name="proveedor" required maxlength="100">

            <label for="fecha_caducidad">Fecha de Caducidad (Opcional):</label>
            <input type="date" id="fecha_caducidad" name="fecha_caducidad">

            <button type="submit">Guardar Producto</button>
        </form>
    </div>
</body>
</html>