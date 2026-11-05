<?php
abstract class FiguraGeometrica{
    //Variables
    protected string $nombreFigura;

    public function __construct(string $nombreFigura)
    {
        $this->nombreFigura=$nombreFigura;
    }

    abstract public function calcularArea():float;
    public function mostrarNombre():void{
        echo 'nombre: '.$this->nombreFigura;
    }


}
?>