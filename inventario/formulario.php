<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
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
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background: #28a745;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 15px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
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
        
        <label>Nombre del Producto:</label>
        <input type="text" name="nombre" required pattern="[A-Za-z ]{3,50}" title="Solo letras y mínimo 3 caracteres">
        
        <label>Código (SKU):</label>
        <input type="text" name="codigo" required pattern="[A-Za-z0-9]{5,10}" title="Debe tener entre 5 y 10 caracteres alfanuméricos">
        
        <label>Descripción:</label>
        <textarea name="descripcion" required></textarea>
        
        <label>Categoría:</label>
        <select name="categoria" required>
            <option value="Alimentos">Alimentos</option>
            <option value="Bebidas">Bebidas</option>
            <option value="Ropa">Ropa</option>
        </select>
        
        <label>Cantidad en Stock:</label>
        <input type="number" name="cantidad" required min="1" max="9999">
        
        <label>Precio de Compra:</label>
        <input type="number" name="precio_compra" required step="0.01">
        
        <label>Precio de Venta:</label>
        <input type="number" name="precio_venta" required step="0.01">
        
        <label>Proveedor:</label>
        <input type="text" name="proveedor" required pattern="[A-Za-z ]{3,50}" title="Solo letras y mínimo 3 caracteres">
        
        <label>Fecha de Caducidad (Opcional):</label>
        <input type="date" name="fecha_caducidad">
        
        <button type="submit">Guardar Producto</button>
    </form>
</div>

</body>
</html>