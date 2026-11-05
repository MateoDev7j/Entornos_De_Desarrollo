<?php
require_once __DIR__ . "/src/Coche.php";
echo '<h1>Datos del coche</h1>';
$coche1 = new Coche();
echo '<ul>';
echo '<li>Marca:'.$coche1=>marca .'</li>';
echo '<li>Modelo:'.$coche1=>modelo .'</li>';
echo '<li>Color:'.$coche1=>color .'</li>';
echo '<li>Caballos:'.$coche1=>caballos .'</li>';
echo '<li>Velocidad:'.$coche1=>velocidad .'</li>';
echo '<li>Plazas:'.$coche1=>plazas .'</li>';
echo '</ul>';
echo '<h2>Cambiamos el color del coche y lo ponemos amarillo</h2>';
$coche1->setColor('amarillo');
echo 'El nuevo color de mi coche es:'.$coche1=>color;
echo '<h2>Mi coche va a acelerar 4 veces y frenar una vez</h2>';
$coche1->acelerar();
$coche1->acelerar();
$coche1->acelerar();
$coche1->acelerar();
$coche1->frenar();
echo '<h2>Creamos un nuevo coche su color sera verde y el modelo gallardo</h2>';
$coche2 = new Coche();
$coche2->setColor('verde');
$coche2->setModelo('gallardo');
echo '<h2>Datos del nuevo coche: </h2>';
echo '<ul>';
echo '<li>Marca:'.$coche2=>marca .'</li>';
echo '<li>Modelo:'.$coche2=>modelo .'</li>';
echo '<li>Color:'.$coche2=>color .'</li>';
echo '<li>Caballos:'.$coche2=>caballos .'</li>';
echo '<li>Velocidad:'.$coche2=>velocidad .'</li>';
echo '<li>Plazas:'.$coche2=>plazas .'</li>';
echo '</ul>';

?>