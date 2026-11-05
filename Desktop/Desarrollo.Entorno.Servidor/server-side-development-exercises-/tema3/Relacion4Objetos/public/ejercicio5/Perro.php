<?php
class Pedro{
    private int $tamaño;
    private string $raza;
    private string $color;
    private string $nombre;
    public function __construct(int $tamaño, string $raza,string $color, string $nombre){
        $this->tamaño=$tamaño;
        $this->raza=$raza;
        $this->color=$color;
        $this->nombre=$nombre;
    }
    public function mostrar_propiedades():void{
        echo 'el tamaño del perro es '.$this->tamaño.'su color '.$this->color.'su raza '.$this->raza.'y su nombre:'.$this->nombre;
    }
    public function speak():void{
        echo 'Wof Wof';
    }
    /**
     * Get the value of color
     */ 
    public function getColor():string
    {
        return $this->color;
    }
    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor(string $color):self
    {
        $this->color = $color;

        return $this;
    }
    /**
     * Get the value of raza
     */ 
    public function getRaza():string
    {
        return $this->raza;
    }
    /**
     * Set the value of raza
     *
     * @return  self
     */ 
    public function setRaza(string $raza):self
    {
        $this->raza = $raza;

        return $this;
    }
    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    /**
     * Get the value of tamaño
     */ 
    public function getTamaño():int
    {
        return $this->tamaño;
    }
    /**
     * Set the value of tamaño
     *
     * @return  self
     */ 
    public function setTamaño(int $tamaño):Self
    {
        $this->tamaño = $tamaño;
        return $this;
    }
    public function __call($methodName, $args){
        echo "El meodo $methodName no existe";
        echo "<br> Pero puedo ladrar..";
    }
}
?>