<?php
require_once 'FiguraGeometrica.php'; 
class Circulo extends FiguraGeometrica{
    public int $radio;
    
    public function __construct(string $nombreFigura,int $radio)
    {
        parent::__construct($nombreFigura);
        $this->radio=$radio;
    }
    public function calcularArea():float{
        $resultado= pi()*$this->radio*$this->radio;
        return $resultado;
    }


}
?>