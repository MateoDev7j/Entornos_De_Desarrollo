<?php
require_once __DIR__ . '/CalculadorEnvio.php';
require_once __DIR__ . '/EnvioBase.php';
class EnvioExpress extends EnvioBase implements CalculadorEnvio{
    function __construct(int $peso, int $distancia, string $tipo_envio)
    {
        parent::__construct($peso, $distancia, $tipo_envio);
    }
    //CALCULAR TARIFA EXPRESS
    function calcular_tarifa_express() {
        $tarifaEstandar = new class{
            function calcular_tarifa_estandar(int $peso ,int $distancia){
                $costo_base = 5.0;
                $costo_por_peso = $peso * 1.5;
                $costo_por_distancia = $distancia * 0.05;
                return $costo_base + $costo_por_peso + $costo_por_distancia;
            }
        };
        $tarifa_estandar = $tarifaEstandar->calcular_tarifa_estandar($this->peso, $this->distancia);
        $cargo_urgencia = 10.0;
        return $tarifa_estandar + $cargo_urgencia;
    }
    function calcularCosto(int $peso, int $distancia, string $tipo_envio):int{
        return match ($tipo_envio) {
            'express' => $this->calcular_tarifa_express($peso, $distancia),
            default => throw new InvalidArgumentException('El tipo de envio no cuadra') 
        };
    }
}
?>