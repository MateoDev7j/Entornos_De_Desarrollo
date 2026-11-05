<?php
require_once 'FiguraGeometrica.php'; 
class Rectangulo extends FiguraGeometrica{
    public int $alto;
    public int $ancho;
    
    public function __construct(string $nombreFigura, int $alto, int $ancho)
    {
        parent::__construct($nombreFigura);
        $this->alto=$alto;
        $this->ancho=$ancho;
    }

    public function calcularArea():float{
        $resultado = $this->alto*$this->ancho;
        return $resultado;
    }
}
?>