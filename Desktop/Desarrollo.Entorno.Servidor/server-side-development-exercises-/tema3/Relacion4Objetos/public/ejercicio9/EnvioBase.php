<?php
abstract class EnvioBase{
    public function __construct(
        protected int $peso,
        protected int $distancia,
        protected string $tipo_envio
    ){}


}
?>