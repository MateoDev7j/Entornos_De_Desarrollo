<?php
class Coche{
    public string $color ='rojo'; 
    public string $marca= 'ferrari'; 
    public string $modelo= 'aventador'; 
    public int $velocidad=300;
    public int $caballos=500;
    public int $plazas=2;
//******************************
// *************GETTERS Y SETTERS
// ****************************** */
 /**
     * Get the value of plazas
     */ 
    public function getPlazas() :int
    {
        return $this->plazas;
    }

    /**
     * Set the value of plazas
     *
     * @return  self
     */ 
    public function setPlazas(int $plazas):self
    {
        $this->plazas = $plazas;

        return $this;
    }
    /**
     * Get the value of caballos
     */ 
    public function getCaballos():int
    {
        return $this->caballos;
    }
    /**
     * Set the value of caballos
     *
     * @return  self
     */ 
    public function setCaballos(int $caballos):self
    {
        $this->caballos = $caballos;

        return $this;
    }
    /**
     * Get the value of velocidad
     */ 
    public function getVelocidad():int
    {
        return $this->velocidad;
    }
    /**
     * Set the value of velocidad
     *
     * @return  self
     */ 
    public function setVelocidad(int $velocidad):self
    {
        $this->velocidad = $velocidad;

        return $this;
    }
    /**
     * Get the value of modelo
     */ 
    public function getModelo():string
    {
        return $this->modelo;
    }
    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo(string $modelo):self
    {
        $this->modelo = $modelo;
        return $this;
    }
    /**
     * Get the value of marca
     */ 
    public function getMarca():string
    {
        return $this->marca;
    }
    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca(string $marca):self
    {
        $this->marca = $marca;

        return $this;
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
    //Implementamos metodos para acelerar y para frenar
    public function acelerar():void{
        $this->velocidad=+1;
        echo 'Se ha incrementado la velocidad: '.$this->velocidad;
    }
    public function frenar():void{
        $this->velocidad=-1;
        echo 'Se ha disminuido la velocidad: '.$this->velocidad;
    }

   
}
    

?>