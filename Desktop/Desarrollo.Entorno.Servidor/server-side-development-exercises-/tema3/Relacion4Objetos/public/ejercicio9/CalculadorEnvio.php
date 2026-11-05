<?php
interface CalculadorEnvio{
    function calcularCosto(int $peso, int $distancia, string $tipo_envio):int;
}
?>