<?php

class Producto {
    private static int $contadorObjetos=0;
    public const IVA=0.21;
    public function __construct() {
        self::$contadorObjetos++;
    }
    public static function obtenerCantidadProductos(): int {
        return self::$contadorObjetos;
    }
}
//Instanciar varios productos y mostrar el total
/*$prod1 = new Producto();
$prod2 = new Producto();
$prod3 = new Producto();

echo "Cantidad total de productos generados: " . Producto::obtenerCantidadProductos(); */
//imprime: Cantidad total de productos generados: 3
?>

