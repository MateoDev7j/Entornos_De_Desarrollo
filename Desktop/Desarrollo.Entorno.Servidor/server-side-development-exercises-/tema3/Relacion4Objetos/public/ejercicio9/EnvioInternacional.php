<?php
require_once __DIR__ . '/CalculadorEnvio.php';
require_once __DIR__ . '/EnvioBase.php';
class EnvioInternacional extends EnvioBase implements CalculadorEnvio{
    function __construct(int $peso, int $distancia, string $tipo_envio)
    {
        parent::__construct($peso, $distancia, $tipo_envio);
    }
    //FUNCION CALCULAR TARIFA
    function calcular_tarifa_internacional() {
        $costo_base = 20.0;
        $costo_por_peso = $this->peso * 5.0;
        $costo_por_distancia = ($this->distancia > 500) ? $this->distancia * 0.1 : 0.0;
        return $costo_base + $costo_por_peso + $costo_por_distancia;
    }
    function calcularCosto(int $peso, int $distancia, string $tipo_envio):int{
        return match ($tipo_envio) {
            'internacional' => $this->calcular_tarifa_internacional($peso, $distancia),
            default => throw new InvalidArgumentException('Error: tipo de envío desconocido.')
        };
    }
}
?>