<?php
class Empleado{
    public function __construct(
        protected string $nombre,
        protected float $salario,
        protected string $departamento
    ){}
    function getSalarioAnual():float{
        return $this->salario= $this->salario*12;
    }
}
?>