<?php
class Animal{
    protected string $especie;
    protected string $edad;
    
    public function __construct(string $especie, string $edad){
        $this->especie=$especie;
        $this->edad=$edad;
    }
    //metodo para sobreescribir en perro
    public function speak():void{
        echo '...';
    }
    public function mostrar_propiedades():void{
        echo "Nombre: {$this->especie}, Edad: {$this->edad}";
    }
    

    /**
     * Get the value of especie
     */ 
    public function getEspecie():string
    {
        return $this->especie;
    }
    /**
     * Set the value of especie
     *
     * @return  self
     */ 
    public function setEspecie(string $especie):self
    {
        $this->especie = $especie;

        return $this;
    }
    /**
     * Get the value of edad
     */ 
    public function getEdad():string
    {
        return $this->edad;
    }
    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad(string $edad):self
    {
        $this->edad = $edad;

        return $this;
    }
}
?>