<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

echo '<h1>Proyecto: Relacion4Objetos</h1>';

require_once 'Producto.php';
$producto = new Producto();
$prod1 = new Producto();
$prod2 = new Producto();
$prod3 = new Producto();

echo "Cantidad total de productos generados: " . Producto::obtenerCantidadProductos(); 
//$producto->setNombre('Camiseta');
//echo '<p>Producto: ' . $producto->getNombre() . '</p>';
//echo '<p>Precio: $' . $producto->getPrecio() . '</p>';

?>
</body>
</html>