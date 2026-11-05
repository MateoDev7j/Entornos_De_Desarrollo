<?php
declare(strict_types=1);
//require_once __DIR__ . '/../vendor/autoload.php';
echo '<h1>Proyecto: RepartoMercancias</h1>';
echo '<p>PHP ' . phpversion() . '</p>';
//Construimos un catalogo de tienda creando un array de arrays
$catalogo[0] = ['producto' => 'cuaderno A4','precio' => 2.50,'pesoEnkg' => 1.0,'stock' => 8,'descuento' => 10.0];
$catalogo[1] = ['producto' => 'boligrafo','precio' => 0.90,'pesoEnkg' => 0.4,'stock' => 25,'descuento' => null];
$catalogo[2] = ['producto' => 'archivador','precio' => 4.20,'pesoEnkg' => 3.0,'stock' => 1,'descuento' => 15.0];

$clientes[0] = ['identificador' => '1234', 'nombre' => 'Juan'];
$clientes[1] = ['identificador' => '4321', 'nombre' => 'Pepe'];
$clientes[2] = ['identificador' => '1414', 'nombre' => 'Laura'];
$clientes[3] = ['identificador' => '2425', 'nombre' => 'Luis'];
$ID_PEDIDO=1;
$pesoTotal=0;
//creamos el array furgoneta
$furgoneta=[];
function generarPedidos(): array{
    global $ID_PEDIDO, $clientes,$catalogo,$pesoTotal;
    $pedidos=[];
    for($i=0;$i<15;$i++){ //bucle para rellenar el array con 15 pedidos
        $clientetemp=0;
        $indiceCatalogorandom=array_rand($catalogo);
        $pedidos[$i]=['id'=>$ID_PEDIDO++,'cliente' => $clientes[array_rand($clientes)]['nombre'],'producto' => $catalogo[$indiceCatalogorandom]['producto'],'unidades' => rand(1,5)];
        $catalogo[$indiceCatalogorandom]['stock']-=1;//restamos stock al producto
        $pesoTotal+=$catalogo[$indiceCatalogorandom]['pesoEnkg'];
    }
    return $pedidos;
}
print_r(generarPedidos());
function extraerPedido(&$pedidos){
    global $pesoTotal,$furgoneta;
    if(count($pedidos)!=0){
        $temp=array_shift($pedidos);
        if($temp['producto']['stock']>0){
            $furgoneta[0]=$temp;
            return $furgoneta;
        }
        else{
            echo 'Sin stock';
        }  
    }
    else if($pesoTotal<=15){
        echo 'No cabe';
    }
    else{
        echo 'No hay pedidos';
    }
}
?>
