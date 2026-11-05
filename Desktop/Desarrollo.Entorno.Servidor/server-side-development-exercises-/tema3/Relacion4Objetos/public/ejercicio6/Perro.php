<?php
require_once __DIR__ . '/Animal.php';
class Perro extends Animal{
    private int $tamaño;
    private string $raza;
    private string $color;
    private string $nombre;
    public function __construct(int $tamaño, string $raza,string $color, string $nombre, string $edad, string $especie){
        parent::__construct($especie,$edad);
        $this->tamaño=$tamaño;
        $this->raza=$raza;
        $this->color=$color;
        $this->nombre=$nombre;
    }
    //mostramos datos de animal y de perro
    public function mostrar_propiedades():void{
        parent::mostrar_propiedades();
        echo ', Tamaño: '.$this->tamaño.' Color: '.$this->color.' Raza: '.$this->raza.' Nombre: '.$this->nombre;
    }
    //sobreescritura
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
    public function getNombre():string
    {
        return $this->nombre;
    }
    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre(string $nombre):self
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
    public function setTamaño(int $tamaño):self
    {
        $this->tamaño = $tamaño;

        return $this;
    }
}
?>