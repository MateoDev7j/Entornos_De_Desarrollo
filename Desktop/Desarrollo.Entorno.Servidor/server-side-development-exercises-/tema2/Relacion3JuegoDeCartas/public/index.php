<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<header>
    <h1>Proyecto: Relacion3JuegoDeCartas</h1>
</header>
<body>
<?php


require 'funcionesCartas.php';
//11. Jugando con cartas
//Las dos actividades propuestas se basan en el uso de arrays
//para representar las 40 cartas de la baraja española y simulan juegos típicos.
//Una baraja española de 40 cartas tiene cuatro palos que son: oros, copas, espadas y bastos. 
//Crea un array llamado $palos con los palos de la baraja española.
    //crearBarajaCompleta();
//1 representa el As.
//10 representa la Sota.
//11 representa el Caballo.
//12 representa el Rey.
//print_r(crearBaraja());
//echo '<br><br>';
//print_r(crearBarajaCompleta());
//echo '<br><br>';
//echo '<br><br>';
//echo '<h1>Barajar baraja</h1>';
//$baraja1 = crearBaraja();
//barajarBaraja($baraja1);
//print_r($baraja);
//$carta = sacarCarta($baraja1);
//echo '<br><br>';
//print_r($baraja);
//echo '<br><br>';
//echo '<br><br>';
//mostrarCarta($carta);
//mostrarBarja($baraja1);
/*******************************************************
*******************************************************
JUEGO DE LAS 7 Y MEDIA********************************
************************************************************/
$cartas_actuales = isset($_GET['cartas']) ? $_GET['cartas'] : '';
$baraja1 = crearBaraja();
barajarBaraja($baraja1);
$puntaje = 0;
while($puntaje<7.5){
    $carta = sacarCarta($baraja1);
    $cartaBanca= sacarCarta($baraja);
    $puntos = $carta;
    mostrarCarta($carta);
    if($puntos['valor']==10 || $puntos['valor']==11 || $puntos['valor']==12){
        $puntaje+=0.5;
        echo '<br>';
        echo '<h3>'.'Puntos de la carta obtenidos: '.$puntaje.'</h3>';
    }
    else{
        $puntaje+=$puntos['valor'];
        echo '<br>';
        echo '<h3>'.'Puntos de la carta obtenidos: '.$puntos['valor'].'</h3>';
    }
    echo 'Puntaje total '.$puntaje;
}
?>
<br><br><a href="http://relacion3juegodecartas.localhost/?accion=pedir&cartas=<?php echo $cartas_actuales; ?>">Pedir otra carta</a>
</body>
</html>