<?php
require_once __DIR__ . '/EnvioEstandar.php';
require_once __DIR__ . '/EnvioInternacional.php';
require_once __DIR__ . '/EnvioExpress.php';
require_once __DIR__ . '/EnvioBase.php';

//Creamos 1 envio de cada clase hija
$envEst= new EnvioEstandar(15,40,'estandar');
$envExp = new EnvioExpress(20,50,'express');
$envInter = new EnvioInternacional(50,60,'internacional');
echo $envEst->calcular_tarifa_estandar();

?>