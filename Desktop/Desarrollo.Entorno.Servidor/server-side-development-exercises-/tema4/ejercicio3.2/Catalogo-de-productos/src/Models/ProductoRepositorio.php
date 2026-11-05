<?php
declare(strict_types=1);
namespace Models;
use Models\Producto;
class ProductoRepositorio{
    public function __construct(){}
    public function getAll():array{
        $array=[null,null,null,null,null,null];
        //$array->foreach();
        return $array;
    }
    public function generarProductoAleatorio():Producto{
        $idAleatorio=(string)rand(100,200);
        $productoNombreAleatorio= ["Bicicleta","Movil","Patinete","Mochila"];
        
        $precioAleatorio = rand(1,100);
        $stockAleatorio = rand(1,10);
        $productoAleatorio = new Producto($idAleatorio, $productoNombreAleatorio[array_rand($productoNombreAleatorio)], $precioAleatorio, $stockAleatorio);
        return $productoAleatorio;
    }
}