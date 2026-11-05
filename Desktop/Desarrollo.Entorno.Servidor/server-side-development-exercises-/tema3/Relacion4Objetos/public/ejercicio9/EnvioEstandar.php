<?php
require_once __DIR__ . '/CalculadorEnvio.php';
require_once __DIR__ . '/EnvioBase.php';

class EnvioEstandar extends EnvioBase implements CalculadorEnvio{
    function __construct(int $peso, int $distancia, string $tipo_envio)
    {
        parent::__construct($peso, $distancia, $tipo_envio);
    }

    function calcular_tarifa_estandar() {
        $costo_base = 5.0;
        $costo_por_peso = $this->peso * 1.5;
        $costo_por_distancia = $this->distancia * 0.05;
        return $costo_base + $costo_por_peso + $costo_por_distancia;
    }
    function calcularCosto(int $peso, int $distancia, string $tipo_envio):int{
        return match ($tipo_envio) {
            'estandar' => $this->calcular_tarifa_estandar($peso, $distancia),
            default => throw new InvalidArgumentException('Error: tipo de envío desconocido.')
        };
    }
}
?>