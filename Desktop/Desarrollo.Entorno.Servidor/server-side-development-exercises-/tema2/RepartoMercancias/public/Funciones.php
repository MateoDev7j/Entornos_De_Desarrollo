<?php
require_once '/index.php';
    function generarClienteAleatorio($clientes):int{
        return array_rand($clientes);
    }
/*
functuin generarPedidos(array $clientes, array $catalogo, int $cantidad):array{
    $pedidos= [];
    for ($id=1;$id<=$cantidad;$id++){
        $pedidos[]=[
            'id' => $id,
            'cliente' => $clientes[array_rand($clientes)],
            'producto' => array_rand($catalogo),
            'unidades' => random_int(1,5)
        ]
    }
}
    function validarPedido(array $pedido, array $catalogo, float $pesoActual):string{
        $producto = $catalogo[$pedido['producto']];

        if ($producto['stock'] < $pedido['unidades']){
            return 'sin stock';
        }
        $pesoPedido
    }
    function actualizarStock(array &$catalogo, string $producto ,int $unidades){
        $catalogo[$producto]['stock'] -= $unidades;
    }
*/
?>